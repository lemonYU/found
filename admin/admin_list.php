<?php

#管理 - 信息列表

session_start();
ob_start();
include_once '../inc/conn.php';
include_once '../inc/order_sql.php';
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
                include_once '../pagesql.php';
                include_once '../page.php';
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
                            添加分类
                        </a>

                        <div class="ime-inner" ng-controller="myCtrl">

                            <table class='table table-bordered table-hover text-center'>
                                <thead>
                                <!--<tr>-->
                                    <!--<th ng-click="sortFn('NO')">序号</th>-->
                                    <!--<th>分类</th>-->
                                    <!--<th ng-click="sortFn('num')">文章数量</th>-->
                                    <!--<th ng-click="sortFn('order')">排序</th>-->
                                    <!--<th>操作</th>-->
                                <!--</tr>-->
                                <tr>
                                    <th>序号</th>
                                    <th>分类</th>
                                    <th>发布人</th>
                                    <th>发布时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i=0;
                                    while ($rs = mysql_fetch_object($result)):
                                    $i++;
                                ?>
                                    <tr>
                                    <td><?php echo $i; ?></td>

                                    <td>
                                        <?php if (($rs->fabu) == '1'){
                                            echo '挂失';
                                        }else{
                                            echo '招领';
                                        }
                                     ?></td>
                                    <td><?php echo $rs->name; ?></td>
                                    <td><?php echo $rs->time; ?></td>
                                    <td>
                                        <a href="modify.php?id=<?=$rs->id?>" type="button" class="btn btn-default">
                                        <span class='glyphicon glyphicon-edit'></span>
                                        编辑
                                        </a>
                                        <a href="delete.php?id=<?=$rs->id?>"  onclick="return confirm('确认删除吗?');" type="button" class="btn btn-default">
                                        <span class=' glyphicon glyphicon-trash'></span>
                                        删除
                                        </a>
                                    </td>
                                </tr>
                               <?php endwhile;?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
    <?php
    while ($rs = mysql_fetch_object($result)) {
        if (($rs->fabu) == '1') {
            $leibie = '<font color=red>挂失</font>';
        } else {
            $leibie = '<font color=blue>招领</font>';
        }
        echo"
		<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
		  <tr>
			<td valign='top'>
			<table width='100%' cellspacing='1' cellpadding='2'>
			<tr align='left'>
				<td width='6%' class='infobr'>$leibie</td>
				<td width='37%' class='infobr'><strong><font color='blue'><a href='../info.php?id=$rs->id' target='_blank'>$rs->title</a></font></strong></td>
				<td width='17%' class='infobr'>$rs->name</td>
				<td width='14%' class='infobr'>$rs->ip</td>
				<td width='18%' class='infobr'>$rs->time</td>
				<td width='4%' class='infobr'><a href='modify.php?id=$rs->id' target=_blank'>修改</a></td>
				<td width='4%' class='infobr'><a href='delete.php?id=$rs->id' target=_blank'>删除</a></td>
			</tr>
		  </table>
		  </td>
		  </tr>
		</table>";
        /*      echo "<div class=result><ul><li>用户名:".$rs->name."&nbsp;&nbsp;<b>标题:</b>".$rs->title."&nbsp;&nbsp;<b>IP:</b>".$rs->ip."&nbsp;&nbsp;<b>发布时间:</b>".$rs->time."</li>\n";
          echo  "<li><a href=modify.php?id=".$rs->id." >修改</a> <a href=delete.php?id=".$rs->id." >删除</a> <a href='../info.php?id=".$rs->id."' target='_blank'>浏览</a></li></ul></div>";
         */
    }
    echo"
		<table width='60%' cellspacing='1' cellpadding='2'>
			<tr bgcolor='#EEF2F4'><td>&nbsp;</td></tr>
		</table>
		<table width='60%' cellspacing='1' cellpadding='2'>
			<tr bgcolor='#DBE6F5'>
			<td><span style='float:left; text-align:left'><font color=#666666>$page_string</font></span><span style='float:right; text-align:left'><font color=#666666>每页显示<b>$page_size</b>条，总共有&nbsp;<b>$amount</b>&nbsp;条信息。<font></span></td>
			</tr>
		</table>";
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