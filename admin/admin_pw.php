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
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
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
            <br>
             <h4 align="center">修改密码</h4><br>
            <div class="col-lg-10">
                 <form class="form-horizontal" action="uppassword.php" method="post" >
                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">账号</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="username" disabled value='<?= $_SESSION['user']; ?>' name="username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nickname" class="col-sm-3 control-label">姓名</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="nickname" value="<?=$nickname?>" name='nickname'>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                      </div>
                    <div class="col-sm-3 col-sm-offset-3">
                        <input type="submit" name="submit" class="btn btn-success pull-left" value='修改'>
                        <input type="reset" name="B2" class="btn btn-default pull-left" value='重置'>
                        <input type="hidden" name="id" value=<?= $_GET['id'];?>>
                    </div>
                  </form>
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
