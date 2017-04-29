<?php

#管理 - 信息列表

session_start();
ob_start();
include_once '../inc/conn.php';
include_once '../inc/info_user.php';
?>
<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>失物招领</title>
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
    </head>
    <body>
        <?php include 'head.php';?>
        <div class="col-lg-10">
                <!-- 面板 -->
                <div class="panel">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">分类列表 <small>分类</small></h3>
                        <!-- 面包屑导航 -->
                        <ol class="breadcrumb pull-right">
                            <li>
                                <span class=' glyphicon glyphicon-dashboard'></span>
                                <a href="#">管理中心</a>
                            </li>
                            <li>
                                <a href="#">分类</a>
                            </li>
                            <li class="active">分类列表</li>
                        </ol>
                    </div>
                </div>
            <?php
            if ($_SESSION['admin'] == "OK") {
                include_once 'head.php';
                // include_once '../pagesql.php';
                // include_once '../page.php';
                ?>
                <p id="hr"></p>
<!--                 <table width='60%' id='cow' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td valign='top'>
                            <table width='100%' cellspacing='1' cellpadding='2'>
                                <tr align='left'>
                                    <td width='6%' class='infobr'><strong>
                                            <form action='admin_list.php' id="filterForm">
                                                <select name='info' onchange="document.getElementById('filterForm').submit()">
                                                    <option value=''>选择</option>
                                                    <option value='guashi'>挂失</option>
                                                    <option value='zhaoling'>招领</option>
                                                    <option value='all'>全部</option>
                                                </select>
                                            </form>
                                        </strong></td>
                                    <td width='37%' class='infobr'><strong>标题：</strong></td>
                                    <td width='17%' class='infobr'><strong>用户名：</strong></td>
                                    <td width='14%' class='infobr'><strong>IP：</strong></td>
                                    <td width='18%' class='infobr'><strong>发布时间：</strong></td>
                                    <td width='4%' class='infobr'></td>
                                    <td width='4%' class='infobr'></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table> -->

                                <!-- 表格 -->
                <div class="ime-wrap">
                    <div class="ime-tab clearfix">
                        <a href="/admin/cats/add" type="button" class="btn-add btn btn-default pull-right">
                            添加用户
                        </a>

                        <div class="ime-inner" ng-controller="myCtrl">

                            <table class='table table-bordered table-hover text-center'>
                                <thead>

                                <tr>
                                    <th>序号</th>
                                    <th>用户名</th>
                                    <th>昵称</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i=0;
                                    // var_dump($rs);
                                    // die();
                                    while ($rs = mysql_fetch_object($result)):
                                        // var_dump($rs);
                                    $i++;
                                ?>
                                    <tr>
                                    <td><?php echo $i; ?></td>

                                    <td><?php echo $rs->username; ?></td>
                                    <td><?php echo $rs->nickname; ?></td>
                                    <td>
                                        <a href="user_edit.php?id=<?=$rs->id?>" type="button" class="btn btn-default">
                                        <span class='glyphicon glyphicon-edit'></span>
                                        编辑
                                        </a>
                                        <a href="/admin/cats/delete?id=<%= item._id %>"  onclick="return confirm('确认删除吗?');" type="button" class="btn btn-default">
                                        <span class=' glyphicon glyphicon-trash'></span>
                                        删除
                                        </a>
                                    </td>
                                </tr>

                               <?php  endwhile;?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
    <?php

} else {
    header("location:login.php");
    ob_end_flush();
}
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