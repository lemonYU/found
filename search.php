<?php
#搜索页面
session_start();
include_once 'inc/info_web.php';
include_once 'inc/info_ad.php';

     
include_once 'head.php';
?>
              
           
        <!-- 页顶-栏目信息-End  -->
        <div style='margin-top:50px'>
            <h4 class="title container" align='center' id="title">信息搜索</h4>
            <br>
            <?php
            echo "
            <div id='search' class='container'>
	            <form action='searchResult.php' method='post' class='clearfix' align='center'>
	            
				  <div class='form-group col-md-6 col-md-offset-2 pull-left'>
				    <div class='input-group col-md-12'>
				      <input type='text' class='form-control' id='exampleInputAmount' placeholder='搜索关键字...'  name='key' style='height:50px;border-radius:1rem;'>
				    </div>
				  </div>
				  <div class='input-group col-md-2 pull-left'>
				  	<input type='submit' class='btn btn-default' value='搜索' style='min-width:150px'/>
				  </div>
				</form>
			</div>
			<p align='center'>热门搜索： 身份证 钱包 驾照 手机 Iphone 火车站 </p>
        </div>";

?>

</br><?= $ad_foot; ?><!--底部广告-->
	
<!-- 页脚-版权信息-Start  -->

﻿<p id="hr"></p>
<?php
include_once 'foot.php'; //插入foot.php页脚信息
?>

<!-- 页脚-版权信息-End  -->
