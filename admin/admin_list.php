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
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <script src='/public/admin/js/manager.js'></script>
    <style>
        th{cursor: pointer;}
    </style>
    </head>
    <body>
        <?php include 'head.php';?>
        <div class="col-lg-10 col-md-10">
                <!-- 面板 -->
                <div class="panel">
                    <div class="panel-heading clearfix">
                        <?php
                            $catagray = isset($_GET['info'])?$_GET['info']:'';
                            if($catagray=='zhaoling'){
                                 echo "<h3 class='pull-left'>信息管理<small> 招领信息管理</small></h3>
                                 <!-- 面包屑导航 -->
                                <ol class='breadcrumb pull-right'>
                                    <li>
                                        <span class='glyphicon glyphicon-menu-hamburger'></span>
                                        <a href='#'>管理中心</a>
                                    </li>
                                    <li>
                                        <a href='#'>招领信息管理</a>
                                    </li>
                                    <li class='active'>招领信息列表</li>
                                </ol>";
                            }else if($catagray=='guashi'){
                                 echo "<h3 class='pull-left'>信息管理<small> 挂失信息管理</small></h3>
                                 <!-- 面包屑导航 -->
                                    <ol class='breadcrumb pull-right'>
                                        <li>
                                            <span class='glyphicon glyphicon-menu-hamburger'></span>
                                            <a href='#'>管理中心</a>
                                        </li>
                                        <li>
                                            <a href='#'>挂失信息管理</a>
                                        </li>
                                        <li class='active'>挂失信息列表</li>
                                    </ol>";
                            }else{
                                echo '';
                            }
                        ?>

                    </div>
                </div>
            <?php
            if ($_SESSION['admin'] == "OK") {
                include_once 'head.php';
                include_once '../pagesql.php';
                include_once '../page.php';
                ?>
                <p id="hr"></p>
                <div class="ime-wrap">
                    <div class="ime-tab clearfix">
                        <a href="info_add.php?info=<?=$_GET['info']?>" type="button" class="btn-add btn btn-success pull-right">
                            添加信息
                        </a>
                        <div class="ime-inner" ng-controller="myCtrl">
                            <table class='table table-bordered table-hover text-center'>
                                <thead>
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
                                        <a href="modify.php?id=<?=$rs->id?>" type="button" class="btn btn-info">
                                        <span class='glyphicon glyphicon-edit'></span>
                                        编辑
                                        </a>
                                        <a href="delete.php?id=<?=$rs->id?>"  onclick="return confirm('确认删除吗?');" type="button" class="btn btn-danger">
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
            $leibie = '挂失';
        } else {
            $leibie = '招领';
        }
        echo"
		<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
		  <tr>
			<td valign='top'>
			<table width='100%' cellspacing='1' cellpadding='2'>
			<tr align='left'>
				<td width='6%' class='infobr'>$leibie</td>
				<td width='37%' class='infobr'><strong><a href='../info.php?id=$rs->id' target='_blank'>$rs->title</a></strong></td>
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

		<table  class='table '>
			<tr>
			<td><span style='float:left; text-align:left'>$page_string</span><span style='float:right; text-align:left'>每页显示<b>$page_size</b>条，总共有<b>$amount</b>条信息</span></td>
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
        <?php
        include_once 'foot.php'; //插入foot.php页脚信息
        ?>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>