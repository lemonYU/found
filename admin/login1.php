<?php

#登陆页面

session_start();
$_SESSION['admin'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';
include_once '../inc/info_web.php';
include_once '../inc/info_ad.php';
if ($_SESSION['admin'] == "OK") {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title><?= $webname; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <style>
    body{background:url(/public/admin/img/login-background.jpg) center center;}
    .login{width:330px;background:rgba(255,255,255,0.2);border-radius: 3px;margin-top: 100px;padding:10px 30px 20px;margin-bottom: 30px;}
    .login h3{text-align: center;}

    </style>
</head>
<body>
<p class='title' id='title'><?= $webname; ?></br>后台管理登陆</p>
     <div class="login center-block">
                <h2>管理员登录</h2>
                <form action="check.php" method="post" name='adminlogin' id='adminlogin'>
                  <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="请输入用户名">
                    <span class='glyphicon glyphicon-user form-control-feedback'></span>
                  </div>
                  <div class="form-group has-feedback">

                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
                    <span class=' glyphicon glyphicon-lock form-control-feedback'></span>
                  </div>

                  <div class="form-group">
                    <label>
                      <a href="" class="btn btn-link">忘记密码?</a>
                    </label>
                  </div>
                  <button type="reset" class="btn btn-primary btn-block">重置</button>
                  <button type="submit" class="btn btn-primary btn-block">登录</button>
              </form>
    </div>

       <p class="text-center">© 2016 All Rights Reserved. </p>

</body>
</html>
