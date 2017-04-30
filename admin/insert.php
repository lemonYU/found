<?php

#数据添加

session_start();

if (isset($_POST['post_info'])) {

    function getip() {
        $IP = getenv('REMOTE_ADDR');
        $IP_ = getenv('HTTP_X_FORWARDED_FOR');
        if (($IP_ != "") && ($IP_ != "unknown"))
            $IP = $IP_;
        return $IP;
    }

    include_once '../inc/conn.php';
    $name = $_POST['user_name'];
    $qq = $_POST['user_qq'];
    $tel = $_POST['user_tel'];
    $fabu = $_POST['post_fabu'];
    $ip = getip();
    $info = $_POST['post_info'];
    $title = $_POST['post_title'];
    $time = date("Y-m-d H:i:s");
    $exec = "insert into yszl (name,qq,tel,fabu,ip,title,info,time) values ('$name','$qq','$tel','$fabu','$ip','$title','$info','$time')"; //更新全部信息

    $result = mysql_query($exec);

    if($_POST['post_page']=='zhaoling'){
        header("location:admin_list.php?info=zhaoling"); //重定向招领信息页面
    }else{
        header("location:admin_list.php?info=guashi"); //重定向挂失信息页面
    }

} else {
    header("location:index.php");
}
mysql_close();
?>
