<?php

session_start();
if ($_SESSION['admin'] == "OK") {
    include_once '../inc/conn.php';

    $username = isset($_POST['username']) ? $_POST['username']:'';
    $nickname = isset($_POST['nickname']) ? $_POST['nickname']:'';
    $password = isset($_POST['password']) ? $_POST['password']:'';
    $password = sha1($password);
    $exec = "INSERT into `users` values ('','$username','$password','$nickname')";
    $result = mysql_query($exec);

    echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('添加用户成功');window.open('user_list.php','_self');</script>";
} else {
    header("location:login.php");
}

mysql_close();
?>