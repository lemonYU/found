<?php

#管理 - 密码

session_start();
include_once '../inc/conn.php';
include_once '../inc/info_user.php';
if ($_SESSION['admin'] == "OK") {
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
            <div class="col-lg-10">
                <table width='20%' id='cow' cellspacing='0' cellpadding='0'>
                    <form action="uppassword.php" method="post" style="background-color:#EEF2F4; width:60%; " >
                        <tr><td width='40%'><strong>帐号：</strong></td>
                            <td width='60%'><?= $_SESSION['user']; ?></td></tr><br />
                        <tr><td width='40%' class='nickname'><strong>姓名：</strong></td>
                            <td width='60%'><input name="nickname" type="text" size="16" maxlength="16" value="<?=$nickname?>"/></td></tr>
                        <tr><td width='40%' class='infobr'><strong>密码：</strong></td>
                            <td width='60%'><input name="password" type="password" size="16" maxlength="16" /></td></tr>
                        <tr><td></td>
                            <td width='100%'><input name="submit" type="submit" value="修改" />
                                <input name="B2" type="reset" value="重置" /></td></tr>
                    </form>
                </table>
                <?php
            } else
                header("location:login.php");
            mysql_close();
            ?>
        </div>
        <!-- 页脚-版权信息-Start  -->
        <?php
        include_once 'foot.php'; //插入foot.php页脚信息
        ?>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>
