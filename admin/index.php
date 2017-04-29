<?php

#管理 - 首页

session_start();
include_once '../inc/conn.php';

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
         <div class="col-lg-10">
                <!-- 面板 -->
                <div class="panel">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">管理中心 <small>控制台</small></h3>
                        <!-- 面包屑导航 -->
                        <ol class="breadcrumb pull-right">
                          <li>
                            <span class=' glyphicon glyphicon-dashboard'></span>
                            <a href="index.php">管理中心</a>
                          </li>

                          <li class="active">控制台</li>
                        </ol>
                    </div>
                </div>
                <p id="hr"></p>
                <?php
                // echo $_SESSION['user'];

                $system_info = array(
                        '0' => PHP_OS,
                        '1' => php_sapi_name(),
                        '2' => function_exists("mysql_close") ? mysql_get_client_info() : '不支持',
                        '3' => PHP_VERSION,
                        '4' => ini_get('upload_max_filesize'),
                    );

                ?>
              <style type="text/css">
                          h1 { height:30px;line-height:30px;font-size:12px;padding-left:15px;background:#EEE;border-bottom:1px solid #ddd;border-right:1px solid #ddd;overflow:hidden;zoom:1;margin-bottom:10px;}
                          h1 b {color:#3865B8;}
                          h1 span {color:#ccc;font-size:10px;margin-left:10px;}

                          .list {
                            width:48%;
                            height:221px;
                            float:left;
                            margin:0px 15px 0 0;
                          }
                          .list ul{
                            border:1px #ddd solid;
                            overflow:hidden;
                            border-bottom:none;
                            margin-left: 0;
                            padding-left: 0;
                          }
                          .list ul li {
                            border-bottom:1px #ddd solid; height:26px;
                            overflow:hidden;
                            zoom:1;
                            line-height:26px;
                            color:#777;
                            padding-left:5px;
                            list-style:none
                          }
                          .list ul li span{ display:block; float:left; color:#777;width:100px;}
                          .list ul li span, .list ul li{ font-size:12px;}
                          </style>

                          <div class="list">
                            <h1><b>个人信息</b><span>Profile&nbsp; Info</span></h1>
                            <ul>
                              <li><span>用户帐号:</span><?php echo isset($username )?$username:'';?></li>
                              <li><span>用户角色:</span></li>
                              <li><span>上次登陆IP:</span><?php echo isset($ip )?$ip:'';?></li>
                              <li><span>上次登陆时间:</span><?php echo isset($lastlogintime )?$lastlogintime:'';?></li>
                            </ul>
                          </div>
                          <div class="list">
                            <h1><b>系统信息</b><span>System&nbsp; Info</span></h1>
                            <ul>
                              <li><span>操作系统:</span><?php echo $system_info['0']; ?></li>
                              <li><span>运行方式:</span><?php echo $system_info['1']; ?></li>
                              <li><span>PHP版本:</span><?php echo $system_info['3']; ?></li>
                              <li><span>MYSQL版本:</span><?php echo $system_info['2']; ?></li>
                              <li><span>上传限制:</span><?php echo $system_info['4']; ?></li>
                            </ul>
                          </div>
                          <div class="list">
                            <h1><b>作者信息</b><span>Compamay&nbsp; Info</span></h1>
                            <ul>
                              <li><span>官方网站:</span><a target="_blank" href="http://www.hhailuo.com/">www.hhailuo.com</a></li>
                              <li><span>创作人:</span>常三虎</li>
                            </ul>
                          </div>


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

