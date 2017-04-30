<?php

#退出

session_start();
session_unset();
session_destroy();
include_once '../inc/info_web.php';
include_once '../inc/info_ad.php';
?>

<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title><?= $webname; ?></title>
    <meta name="viewport" content="width=device-width,initial-scal=1,maxmum-scal=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <script src="/public/admin/js/angular.min.js"></script>
    <script src='/public/admin/js/manager.js'></script>
    <style>
        th{cursor: pointer;}
    </style>
    <script>
        setTimeout("location.href='../'", 3000);
    </script>
</head>
    <body>
        <div align="center">
            <p class="title" id="title"><?= $webname; ?></p>

            <div style="color:#FF0000"><b>您已退出管理，正在返回网站首页……</b></div>
        </div>
        <!-- 页脚-版权信息-Start  -->
        <div id="footer" >
            <?php
            include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        </div>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>