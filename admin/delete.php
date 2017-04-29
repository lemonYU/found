<?php

#删除信息

session_start();
if (($_SESSION['admin'] == "OK") && isset($_GET['id'])) {
    include_once '../inc/conn.php';
    $exec = "delete from yszl where id=" . $_GET['id'];
    mysql_query($exec);
    header("location:admin_list.php");
} else {
    header("location:login.php");
}
mysql_close();
?>
