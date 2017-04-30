<!--
	<a href="index.php">首页</a><a href="add.php">信息发布</a><a href="index.php?info=zhaoling">招领信息</a><a href="index.php?info=guashi">挂失信息</a><a href="search.php">搜索</a>
-->
<?php

#首页

include_once 'inc/info_web.php';
include_once 'inc/order_sql.php';
include_once 'inc/info_ad.php';
if (isset($_GET['info']) && $_GET['info'] == 'guashi') {
    $topic = '挂失信息-';
} elseif (isset($_GET['info']) && $_GET['info'] == 'zhaoling') {
    $topic = '招领信息-';
} else {
    $topic = '';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $topic; ?><?= $webname; ?></title>
    <link rel="icon" href="/public/img/an.ico" type="image/x-icon" />
   <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link href="/../favicon.ico" rel="shortcut icon">
    <link href="/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/public/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/public/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/public/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/public/css/common.css" rel="stylesheet" type="text/css" media="all"/>
    <!--<link href="/css/reset.css" rel="stylesheet" type="text/css" media="all"/>-->
    <link href="/public/css/index.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>

<div class="main-container">
    <!--导航条start-->
    	<nav class="navbar navbar-default navbar-fixed-top fNavbar" >
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="index.php"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav" id='nav'>
                <li class="active"><a href="index.php?info=zhaoling" class="color">招领 <span class="sr-only">(current)</span></a></li>
                <li><a href="index.php?info=guashi" class="color">寻物</a></li>
                <li><a href="search.php" class="color">搜索</a></li>

              </ul>
              <form class="navbar-form navbar-left">

                <input type="text" class="form-control navInput" placeholder="输入物品特征快速搜索">
                <button type="button" class="btn btn-default publish">搜搜</button>
              </form>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="add.php" class="color">快速发布</a></li>
                <li><a href="about.php" class="color">关于我们</a></li>

              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    <!--导航条end-->

    <div class="page-title page-title-4 bg-secondary container">


