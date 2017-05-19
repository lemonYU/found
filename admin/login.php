<?php

#登陆页面

session_start();
$_SESSION['admin'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';
include_once '../inc/info_web.php';
include_once '../inc/info_ad.php';
if ($_SESSION['admin'] == "OK") {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title><?= $webname; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/public/admin/css/layer.css">
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <script src="/public/admin/js/jquery.particleground.min.js"></script>
    <script src='/public/layer/layer.js'></script>
    <style>
	    /*body{background:url(/public/admin/img/login-background.jpg) center center;}
	    .login{width:330px;background:rgba(255,255,255,0.2);border-radius: 3px;margin-top: 100px;padding:10px 30px 20px;margin-bottom: 30px;}
	    .login h3{text-align: center;}*/
        body {
          background: #16a085;
          font-family: 'Montserrat', sans-serif;
          color: #fff;
          line-height: 1.3;
          -webkit-font-smoothing: antialiased;
        }
        .title{
            font-family: '微软雅黑';
        }
        .form-control-feedback {
            color: #ccc;
        }
    </style>
</head>
<body>
	<div id="particles">
		<div class="loginWrap">
			<p class='title' id='title' align='center'><?= $webname; ?></br>后台管理登陆</p>
			<div class="login center-block">
				<h2 align='center' style="font-family:'微软雅黑';">管理员登录</h2><br>
				<form onsubmit="return false" method="post" name='adminlogin' id='adminlogin'>
					<div class="form-group has-feedback">
						<input type="text" name="username" id="username" class="form-control" placeholder="请输入用户名">
						<span class='glyphicon glyphicon-user form-control-feedback'></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
						<span class=' glyphicon glyphicon-lock form-control-feedback'></span>
					</div>
					<div class="form-group">
						<label>
	                        <input type="checkbox"> 记住密码
	                    </label>
					</div>

					<button type="submit" onclick="check()" class="submitBtn btn btn-success btn-block">登录</button>
					<button type="reset" class="btn btn-primary btn-block">重置</button>

				</form>
			</div>

				<p align='center' style="font-family:'微软雅黑';color:#222;margin-top: 120px;font-size: 30px;">LOST&FOUND...</p><br>
				<small>© 2017 All Rights Reserved buy 七月. </small>
		</div>
	</div>
</body>
<script type="text/javascript">
		$(document).ready(function() {
		  $('#particles').particleground({
		    dotColor: '#5cbdaa',
		    lineColor: '#5cbdaa'
		  });
		  $('.intro').css({
		    'margin-top': -($('.intro').height() / 2)
		  });
 

		});

    function check(){
                var username = $('#username').val();
                var paw = $('#password').val();
                $.ajax({
                  url:"checkAjax.php",
                  data:{"username":username,'password':paw},
                  type:'post',
                  dataType:'json',
                  success:function(res){
                      if(res.status == '0'){
                          layer.confirm('<p style="color:#333">用户名或密码错误！<p>', {
                                  btn: ['确定']
                              }, function(){
                                  window.location.href='login.php';

                              });
                   
                      }else{
                        window.location.href='index.php';

                      }
                      
                  },
                });

          
          // return false;
          }

</script>
</html>
