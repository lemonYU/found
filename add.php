<?php

#添加数据的页面

include_once 'inc/info_web.php';    //网站信息
include_once 'inc/info_ad.php';     //广告
?>

    <!-- 页顶-栏目信息-Start  -->
   
    <?php
     include_once 'head.php';
    ?>
           
    <!-- 页顶-栏目信息-End  -->
    <div class='lmInfo'>
        <h4 class="title" id="title" align='center'><?= $addname; ?></h4>
        
          <form class="form-horizontal" action="add_updata.php" method="post" name="leavemsg" id="leavemsg">
		  



		  <label class="col-sm-2 control-label">分类</label>
		  	<div class="form-group col-sm-10">
			 <label class="radio-inline">
              <input type="radio" name="post_fabu" checked id="post_fabu" value="1">挂失
            </label>
            <label class="radio-inline">
              <input type="radio" name="post_fabu" id="post_fabu" value="2">招领
            </label>
			 
			</div>
		  	<!--标题-->
		  <div class="form-group">
			  <label for="post_title" class="col-sm-2 control-label">标题</label>
		      <div class="col-sm-10">
		      	<input type="text" name="post_title" required class="form-control" id="post_title" placeholder="请输入标题">
		      </div>
		  </div>
		  <!--用户名-->
		  <div class="form-group">
		  
			  <label for="user_name" class="col-sm-2 control-label">姓名</label>
		      <div class="col-sm-10">
		      	<input type="text" required class="form-control" name="user_name" id="user_name" placeholder="请输入姓名">
		      </div>
		  </div>
	      <!--qq-->
		  <div class="form-group">
	      
		      <label for="user_qq" class="col-sm-2 control-label">联系QQ</label>
		      <div class="col-sm-10">
		      	<input type="text" required class="form-control" name="user_qq" id="user_qq" placeholder="请输入联系QQ">
		      </div>
		  </div>
	    
		 <!--联系电话-->
		  <div class="form-group">
		 
			  <label for="user_tel" class="col-sm-2 control-label">联系电话</label>
		      <div class="col-sm-10">
		      	<input type="text" required class="form-control" name="user_tel" id="user_tel" placeholder="请输入联系电话">
		      </div>
		  </div>
		  
	      <!--描述-->
		  <div class="form-group">
	      
		      <label for="post_info" class="col-sm-2 control-label">描述</label>
		      <div class="col-sm-10">
		      	<textarea class="form-control" rows="3" name="post_info" id="post_info" placeholder="添加一点描述吧..."></textarea>
		      </div>
		  </div>
		  
		  
		  <div class="col-sm-2 ">
			     <!--<button type="submit" class="btn btn-default">Submit</button>-->
			    <input type="submit" name="submit" class="btn btn-default pull-left" value='提交'>
			    <input type="reset" name="B2" class="btn btn-default pull-left" value='清空'>
			
		  </div>
		  
		</form>
        
       
    </div>

    <!-- 页脚-版权信息-Start  -->
    
        ﻿<p id="hr"></p>
        <?php
        include_once 'foot.php'; //插入foot.php页脚信息
        ?>
   
    <!-- 页脚-版权信息-End  -->
<script type="text/javascript">
        function check_message() {
            if (window.document.leavemsg.user_name.value == "") {
                alert("请填写用户名");
                document.leavemsg.user_name.focus();
                return false;
            }
            if (document.leavemsg.post_title.value == "") {
                alert("请填写留言标题.");
                document.leavemsg.post_title.focus();
                return false;
            }
            if (CKEDITOR.instances.content.getData() == "") {
                alert("请填写留言内容.");
                document.leavemsg.post_info.focus();
                return false;
            }
        }
    </script>
