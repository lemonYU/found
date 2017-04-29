<?php

#具体单页面帖子详情

include_once 'inc/info_web.php';
include_once 'inc/info_ad.php';
include_once 'inc/info_data.php';
if (isset($_GET['id']) && $_GET['id'] !== '' && $row_stat != '0') {
    $id = intval($_GET['id']);
}//如果传值存在且传值不为空、数据库内存在，那么就给对应的页值。
else {
    header("location:index.php");
} //判断传值是否存在，如果不存在，那么就是第1页。
?>

        <!-- 页顶-栏目信息-Start  -->


        <?php
        include_once 'head.php';
        ?>

        <!-- 页顶-栏目信息-End  -->
        	<div class="panel panel-primary title" id="title">
        		<div class="panel-heading">
        			<?= $xx ?>
            		<span class="glyphicon glyphicon-hand-down"></span>
        		</div>
				  <ul class="panel-body list-group">
					  <li class="list-group-item">
					  	<span class="col-md-2">标题：</span><?= $title ?>
					  		
					  	</li>
					  <li class="list-group-item"><span class="col-md-2">发布时间：</span><?= $rs->time ?></li>
					  <li class="list-group-item"><span class="col-md-2">用户名：</span><?= $name ?></li>
					  <li class="list-group-item"><span class="col-md-2">联系QQ：</span><a href="http://sighttp.qq.com/msgrd?v=3&uin=<?= $qq ?>&Site=http://bbs.zzzzy.com&Menu=yes" target="_blank"><?= $qq ?></a></li>
					  <li class="list-group-item"><span class="col-md-2">描述：</span><?= $rs->info ?></li>
					</ul>
				</div>
            	
<!-- 页脚-版权信息-Start  -->

    ﻿<p id="hr"></p>
    <?php
    include_once 'foot.php'; //插入foot.php页脚信息
    ?>

<!-- 页脚-版权信息-End  -->
