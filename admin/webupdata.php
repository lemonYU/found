<?php

#网站信息更新

session_start();
if ($_SESSION['admin'] == "OK") {
    include_once '../inc/conn.php';
    $exec = "select * from webinfo";
    $exec = "update webinfo set webname ='" . $_POST['post_name'] . "',webmail = '" . $_POST['post_mail'] . "',webqq = '" . $_POST['post_qq'] . "',webstat = '" . $_POST['post_stat'] . "'"; //修改站点信息
    $result = mysql_query($exec);
    // header("location:successful.php"); //修改成功
} else {
    header("location:login.php");
}
mysql_close();
?>

