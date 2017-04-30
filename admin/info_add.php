<?php
#修改信息

session_start();
if (($_SESSION['admin'] == "OK")) {
    include_once '../inc/conn.php';

?>
<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>失物招领</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link rel="stylesheet" href='/public/admin/css/bootstrap.min.css'>
    <link rel="stylesheet" href='/public/css/common.css'>
    <link rel="stylesheet" href="/public/admin/css/style.css">
    <script src='/public/admin/js/jquery-1.11.3.min.js'></script>
    <script src='/public/admin/js/bootstrap.min.js'></script>
    <script src='/public/admin/js/manager.js'></script>
    <style>
        th{cursor: pointer;}
    </style>
</head>
    <body>
    <?php
    include_once 'head.php';
    ?>
    <div class="col-lg-10">
        <?php
            $title = $_GET['info'];
            if ($title == 'guashi') {
                echo "<br><h4 align='center'>挂失信息添加</h4><br>";
            } else {
                echo "<br><h4 align='center'>招领信息添加</h4><br>";
            }
        ?>

        <p id="hr"></p>
        <form class="form-horizontal"  action="insert.php?info=zhaoling" method="post" name="name1" id="name1">

          <div class="form-group">
            <label class="col-sm-2 control-label">分类</label>
            <div class="col-sm-8">
            <?php
                if($title == 'guashi'){
                    echo "<label class='radio-inline'>
                  <input type='radio' name='post_fabu' checked id='post_fabu' value='1'>挂失
                </label>";
            }else{
                echo "<label class='radio-inline'>
                  <input type='radio' name='post_fabu' checked id='post_fabu' value='2'>招领
                </label>";
            }

            ?>


            </div>
          </div>
            <!--标题-->
          <div class="form-group">
              <label for="post_title" class="col-sm-2 control-label">标题</label>
              <div class="col-sm-8">
                <input type="text" name="post_title" required class="form-control" >
              </div>
          </div>
          <!--用户名-->
          <div class="form-group">

              <label for="user_name" class="col-sm-2 control-label">姓名</label>
              <div class="col-sm-8">

                <input type="text" required class="form-control" name="user_name" id="user_name" >
              </div>
          </div>
          <!--qq-->
          <div class="form-group">

              <label for="user_qq" class="col-sm-2 control-label">联系QQ</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="user_qq" id="user_qq">

              </div>
          </div>

         <!--联系电话-->
          <div class="form-group">

              <label for="user_tel" class="col-sm-2 control-label">联系电话</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="user_tel" id="user_tel" >
              </div>
          </div>

          <!--描述-->
          <div class="form-group">

              <label for="post_info" class="col-sm-2 control-label">描述</label>
              <div class="col-sm-8">
                <textarea class="form-control" rows="3" name="post_info" id="post_info"></textarea>
              </div>
          </div>
            <input type='hidden' name='post_page' value="<?=$title?>">
          <div class="col-sm-2 col-sm-offset-2">
                <input type="submit" name="submit" class="btn btn-success pull-left" value='添加'>
                <input type="reset" name="B2" class="btn btn-default pull-left" value='重置'>
          </div>

        </form>
    </div>
            <?php
                } else
                    header("location:login.php");
            ?>

        <!-- 页脚-版权信息-Start  -->

            <?php
                include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>
