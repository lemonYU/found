<?php
#安装系统文件

if (isset($_POST['agree'])) {
    $data = filter_input_array(INPUT_POST);

    //取POST值,如果有值为空,则跳出
    foreach ($data as $key => $value) {
        if (empty($value)) {
            header("location:install.php");
        } else {
            $istrue = 1;
        }
    }

    if (isset($istrue)) {

        $host = $data['host'];
        $user = $data['user'];
        $db = $data['db'];
        $password = $data['pwd'];

        $conn = mysql_connect($host, $user, $password) or die("数据库连接不成功,数据库相关信息可能出错,请重试!<br /><a href='javascript:history.go(-1);'>返回</a>"); //打开MySQL服务器连接 
        if (isset($data['new'])) {
            mysql_query('CREATE DATABASE ' . $db) or die("可能已经存在数据库,请重试或者去掉'新数据库'的勾.<br /><a href='javascript:history.go(-1);'>返回</a>");
        }

        mysql_select_db($db) or die("数据库不存在,或者不能连接到数据库.<br /><a href='javascript:history.go(-1);'>返回</a>");  //链接数据库 
        mysql_query("set names utf8");            //解决中文乱码问题

        $getsql = file_get_contents('hfmsg.sql');
        //通过sql语法的语句分割符进行分割
        $segment = explode(";", $getsql);
        //循环遍历数组
        foreach ($segment as $current) {
            //将 /* */这种英文解析的去掉
            if (!preg_match('/\/\*.*/', $current)) {
                $cul_data = trim($current);
                //如果值不为空的时候,执行SQL
                if (!empty($cul_data)) {
                    mysql_query($cul_data) or die("安装过程中失败.对应的SQL语句为:<br />" . $cul_data . "<br /><a href='javascript:history.go(-1);'>返回</a>");
                }
            }
        }

        $in_admin_pwd = "INSERT INTO `users` (`id`, `username`, `password`) VALUES(1, '" . $data['admin'] . "', '" . sha1($data['adminpwd']) . "')";
        mysql_query($in_admin_pwd) or die("管理员帐号和密码错误,对应SQL语句为:<br />" . $cul_data . "<br /><a href='javascript:history.go(-1);'>返回</a>");

        //将数据库信息写入config文件,首先必须是777权限
        $cdata = file_get_contents('inc/config.php');
        $f = fopen("inc/config.php", "w");

        $cdata = str_replace('m1', $host, $cdata);  //主机地址
        $cdata = str_replace('m2', $user, $cdata);  //数据库用户名
        $cdata = str_replace('m3', $db, $cdata);  //数据库名
        $cdata = str_replace('m4', $password, $cdata);  //数据库密码

        fwrite($f, $cdata);
        fclose($f);

        echo "安装成功.<a href='index.php'>首页</a><br /><br />管理员帐号:" . $data['admin'] . "<br />管理员密码:" . $data['adminpwd'];
    }
} else {
    ?>
    <h2>安装程序</h2>
    <form action="" method="POST">
        <label>主机IP:</label>
        <input type="text" name="host" value="localhost" placeholder="默认为:localhost" /><br />        
        <label>数据库用户名:</label>
        <input type="text" name="user" /><br />
        <input type="checkbox" name="new" /><label>新数据库:</label><br />
        <label>数据库名称:</label>
        <input type="text" name="db" /><br />
        <label>数据库密码:</label>
        <input type="text" name="pwd" /><br /><br />
        <label>管理员:</label>
        <input type="text" name="admin" /><br />
        <label>管理员密码:</label>
        <input type="text" name="adminpwd" /><br /><br />
        <input type="checkbox" name="agree" /><label>同意协议</label><br />
        <input type='submit' value="创建数据库" />

    </form>

    <?php
}
?>
