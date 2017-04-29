<?php
#管理 - 网站信息

session_start();
include_once '../inc/conn.php';
if ($_SESSION['admin'] == "OK") {
    $exec = "select * from webinfo";
    $result = mysql_query($exec);
    $rs = mysql_fetch_object($result);
    $webname = isset($rs->webname) ? $rs->webname : '';
    $webmail = isset($rs->webmail) ? $rs->webmail : '';
    $webstat = isset($rs->webstat) ? $rs->webstat : '';
    $webqq = isset($rs->webqq) ? $rs->webqq : '';
    ?>
 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ime-index</title>
    <meta name="viewport" content="width=device-width,initial-scal=1,maxmum-scal=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <script src='/public/admin/js/manager.js'></script>

<style>
   .ime-main .dropdown-menu .login-btn a{
    display: inline-block!important;}
</style>
</head>
<body>
<?php require_once 'head.php';?>
                <p id="hr"></p>
                <table width='40%' id='cow' cellspacing='0' cellpadding='0'>
                    <tr><td valign='top'>
                            <table width='100%' cellspacing='1' cellpadding='2'>
                                <form action="webupdata.php" method="post">
                                    <tr><td width='20%'><strong>网站标题：</strong></td>
                                        <td width='80%'><input name="post_name" type="text" value="<?= $webname ?>" size="50" maxlength="32"></td></tr>
                                    <tr><td width='20%' class='infobr'><strong>站长QQ：</strong></td>
                                        <td width='80%'><input name="post_qq" type="text" value="<?= $webqq ?>" size="50" maxlength="10"></td></tr>
                                    <tr><td width='20%'><strong>网站邮箱：</strong></td>
                                        <td width='80%'><input name="post_mail" type="text" value="<?= $webmail ?>" size="50" maxlength="32"></td></tr>
                                    <tr><td width='20%' class='infobr'><strong>网站统计：</strong></td>
                                        <td width='80%'><textarea name="post_stat" cols="83" rows="2"><?= $webstat ?></textarea></td></tr>
                                    <tr><td></td>
                                        <td width='100%'><input name="submit" type="submit" value="修改" />
                                            <input name="B2" type="reset" value="重置" /></td></tr>
                                </form>
                            </table>
                        </td></tr>
                </table>
                <?php
            } else
                header("location:login.php");
            mysql_close();
            ?>
        </div>
        <!-- 页脚-版权信息-Start  -->
        <div id="footer" >
            ﻿<p id="hr"></p>
            <?php
            include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        </div>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>
