<?php
/**
 * @Author: anchen
 * @Date:   2017-05-07 14:07:11
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-05-07 14:10:39
 */

#删除信息

session_start();
if (($_SESSION['admin'] == "OK") && isset($_GET['id'])) {
    include_once '../inc/conn.php';
    $exec = "delete from users where id=" . $_GET['id'];
    mysql_query($exec);
    header("location:user_list.php");
} else {
    header("location:login.php");
}
mysql_close();
?>