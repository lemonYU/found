
    	
        <!-- 页顶-栏目信息-Start  -->
            <?php
                include_once 'head.php';
            ?>
            <div class="page-cate-img">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img class="img-responsive" src="/public/img/header.jpg"/>
                        </div>
                        <div class="item">
                          <img class="img-responsive" src="/public/img/header1.png"/>

                        </div>
                        <div class="item">
                          <img class="img-responsive" src="/public/img/header3.png"/>

                        </div>
                      </div>

                </div>

				<div class="page-cate-title">
	                <span class="title-text">最新失物招领启事及回复</span>
	            </div>

            </div>
           
        <!-- 页顶-栏目信息-End  -->
        <!--整页居中对齐 -->
            <!-- <p class="title" id="title"><?= $topic; ?></p> --><!--页面标题 -->
           <!--  <?= $ad_top; ?> </br> --><!--顶部广告-->
            <!--栏目开始-->
            
            <table  class="table table-bordered table-hover text-center">
                <tr>
                    <td>分类</td>
                    <td>标题</td>
                    <td>提交时间</td>
                </tr>
                       
            
        <!--栏目结束 -->
        <?php
            include_once 'pagesql.php';
            include_once 'page.php';
            while ($rs = mysql_fetch_object($result)) {
                if (($rs->fabu) == "1") {
                    $leibie = '<span>挂失</span>';
                } else {
                    $leibie = '<span>招领</span>';
                }
                echo"
		  
				<tr>
					<td>$leibie</td>
					<td><a href='info.php?id=" . $rs->id . "' target='_blank' title='$rs->title'>$rs->title</a></td>
					<td>$rs->time</td>
				</tr>";
            }
 
			echo"
			</table>
			 
        	 <p class='clearfix'>
        	   		<span class='pull-left' align='left'>$page_string</span>
        	   		
        	   		<span style='float:right; text-align:left'>
        	   			
        				每页显示<b>$page_size</b>条，总共有&nbsp;<b>$amount</b>&nbsp;条";
        		
        	            echo $topic;
        	            echo"。</span>
        	<p>";

            mysql_close();
            ?>
      

<!-- 页脚-版权信息-Start  -->
    ﻿<p id="hr"></p>
    <?php
    	 include_once 'foot.php'; //插入foot.php页脚信息
    ?>
<!-- 页脚-版权信息-End  -->
