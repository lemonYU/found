<?php

#管理 - 密码

session_start();
include_once '../inc/conn.php';
include_once '../inc/info_user.php';
if ($_SESSION['admin'] == "OK") {
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ime-index</title>
   <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <link rel="stylesheet" href="/public/admin/css/layer.css">
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <script src='/public/admin/js/manager.js'></script>
    <script src='/public/layer/layer.js'></script>

<style>
   .ime-main .dropdown-menu .login-btn a{
    display: inline-block!important;}
</style>
</head>
<body>
<?php

    require_once 'head.php';
    $sql = "select * from users where id='".$_GET['id']."'";

    $res = mysql_query($sql);
    $res = mysql_fetch_object($res);
    $username = isset($res->username) ? $res->username : '';
    $nickname = isset($res->nickname) ? $res->nickname : '';
    $id = isset($res->id) ? $res->id : '';


?>
                <p id="hr"></p>
                <div class="col-lg-10 col-md-10">
                    <h4 align="center">用户信息管理</h4><br>
                    <form class="form-horizontal" action="uppassword.php" method="post" >
                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">账号</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="username" readonly="readonly" value="<?=$username?>" name="username" placeholder="请输入账号名">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nickname" class="col-sm-3 control-label">姓名</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="nickname" value="<?=$nickname?>" name='nickname'  placeholder="请输入昵称">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password1" class="col-sm-3 control-label">重新输入密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password1" placeholder="Password" name="password">
                        </div>
                      </div>
                    <div class="col-sm-3 col-sm-offset-3">
                        <input type="submit" name="submit" class="btn btn-success pull-left submitBtn" value='修改'>
                        <input type="reset" name="B2" class="btn btn-default pull-left" value='重置'>
                        <input type="hidden" name="id" value=<?= $_GET['id'];?>>
                    </div>
                  </form>

                </div>
                <?php
            } else
                header("location:login.php");
                mysql_close();
            ?>
        <!-- 页脚-版权信息-Start  -->
            <?php
            include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        <!-- 页脚-版权信息-End  -->
    </body>
    <script>

    $('#password1').blur(function(event) {
      if($(this).val()!=$('#password').val()){
          //配置一个透明的询问框
          layer.msg('两次输入密码不一致<br>请您重新输入！', {
            time: 2000//20s后自动关闭

          });
        return false;
      }
      // else{
      //   $('.submitBtn').submit();
      // }
    });
    </script>
</html>