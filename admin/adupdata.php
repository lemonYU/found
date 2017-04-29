<?php

#管理 - 更新广告

session_start();
if ($_SESSION['admin'] == "OK") {
    include_once '../inc/conn.php';
    $exec = "select * from ad";
    $exec = "update ad set ad_top ='" . $_POST['post_adtop'] . "',ad_foot = '" . $_POST['post_adfoot'] . "'"; //修改广告信息
    $result = mysql_query($exec);
    header("location:successful.php"); //修改成功
} else {
    header("location:login.php");
}
mysql_close();
?>

