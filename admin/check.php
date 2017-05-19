<?php
    #登陆验证密码
    include_once '../inc/conn.php';
    session_start();
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $passwords = sha1($_POST['password']);
    $exec = "select password from users where username='$username'";
    $result = mysql_query($exec);
    $num = mysql_num_rows($result);
    if ($rs = @mysql_fetch_object($result)){
            if ($rs->password == $passwords) {//检查登陆密码
                $_SESSION['admin'] = "OK"; //检查登陆用户
                $_SESSION['user'] = $username;
                header("location:index.php");
            } else{
                include_once 'head.php';

                //检查登陆密码
                echo "<script>
                    layer.confirm('密码错误请重新输入！', {
                        btn: ['确定']
                    }, function(){
                        window.location.href='login.php';
                    });
                    </script>";
            }
    }else{
        include_once 'head.php';
         //检查登陆用户
        echo "<script>
                layer.confirm('用户名错误请重新输入！', {
                    btn: ['确定']
                }, function(){
                    window.location.href='login.php';
                });
                </script>";
    }

    mysql_close();
?>
