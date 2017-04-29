<?php

#登陆验证密码

include_once '../inc/conn.php';
session_start();
$username = htmlspecialchars($_POST['username'], ENT_QUOTES);
$passwords = sha1($_POST['password']);
$exec = "select password from users where username='$username'";
$result = mysql_query($exec);
$num = mysql_num_rows($result);
if ($rs = @mysql_fetch_object($result)) {
    if ($rs->password == $passwords) {//检查登陆密码
        $_SESSION['admin'] = "OK"; //检查登陆用户
        $_SESSION['user'] = $username;
        header("location:index.php");
    } else
        echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javaScript'>alert('密码错误');window.location.href=document.referrer;</script>"; //检查登陆密码
} else
    echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><script language='javaScript'>alert('用户名错误');window.location.href=document.referrer;</script>"; //检查登陆用户

mysql_close();
?>
