<?php
/**
 * @Author: anchen
 * @Date:   2017-04-30 17:38:43
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-04-30 19:23:51
 */

#管理 - 密码

session_start();
include_once '../inc/conn.php';
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
<?php

    require_once 'head.php';

?>
                <p id="hr"></p>
                <div class="col-lg-10 col-md-10">
                    <h4 align="center">用户信息管理</h4>

                    <form class="form-horizontal" action="user_insert.php" method="post" >
                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">账号</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="username"   name="username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nickname" class="col-sm-3 control-label">姓名</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="nickname"  name='nickname'>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">重新输入密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                      </div>
                    <div class="col-sm-3 col-sm-offset-3">
                        <input type="submit" name="submit" class="btn btn-success pull-left" value='添加'>
                        <input type="reset" name="B2" class="btn btn-default pull-left" value='重置'>
                    </div>
                  </form>

                </div>
                <?php
            } else
                header("location:login.php");
            ?>
        <!-- 页脚-版权信息-Start  -->
            <?php
            include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>