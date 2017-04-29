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
    <link rel="stylesheet" href='/public/css/common.css'>
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
        <h4>失物信息编辑</h4>
        <p id="hr"></p>
        <form class="form-horizontal"  action="updata.php" method="post" name="name1" id="name1">

            <!--网站标题-->
          <div class="form-group">
              <label for="post_title" class="col-sm-2 control-label">网站标题</label>
              <div class="col-sm-8">
                <input type="text" name="post_name" required class="form-control" value='<?= $webname ?>'>
              </div>
          </div>
          <!--站长QQ-->
          <div class="form-group">

              <label for="user_name" class="col-sm-2 control-label">站长QQ</label>
              <div class="col-sm-8">

                <input type="text" required class="form-control" name="post_qq" id="post_qq" value='<?= $webqq ?>'>
              </div>
          </div>
          <!--邮箱-->
          <div class="form-group">

              <label for="user_qq" class="col-sm-2 control-label">网站邮箱</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="post_mail" id="post_mail" value='<?= $webmail ?>'>

              </div>
          </div>

         <!--联系电话-->
          <div class="form-group">

              <label for="user_tel" class="col-sm-2 control-label">网站统计</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="post_stat" id="post_stat" value="<?= $webstat ?>">
              </div>
          </div>
          <div class="col-sm-2 col-sm-offset-2">
                <input type="submit" name="submit" class="btn btn-success pull-left" value='修改'>
                <input type="reset" name="B2" class="btn btn-default pull-left" value='重置'>

          </div>

        </form>
    </div>



                <!-- old start -->
               <!--  <table width='40%' id='cow' cellspacing='0' cellpadding='0'>
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
                </table> -->
                <!-- old old -->
                <?php
            } else
                header("location:login.php");
            mysql_close();
            ?>
        <!-- 页脚-版权信息-Start  -->
            <?php
            include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>
