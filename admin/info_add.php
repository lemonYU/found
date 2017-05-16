<?php
#修改信息

  session_start();
  if ($_SESSION['admin'] == "OK") {
      include_once '../inc/conn.php';
   }
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
                <input type="text" required pattern='^1[34578]\d{9}$' class="form-control" name="user_tel" id="user_tel" >
              </div>
          </div>

          <!--描述-->
          <div class="form-group">

              <label for="post_info" class="col-sm-2 control-label">描述</label>
              <div class="col-sm-8">
                <textarea class="form-control" required rows="3" name="post_info" id="post_info"></textarea>
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
            if ($_SESSION['admin'] != "OK") {
                    header("location:login.php");}
            ?>

        <!-- 页脚-版权信息-Start  -->

            <?php
                include_once 'foot.php'; //插入foot.php页脚信息
            ?>
        <!-- 页脚-版权信息-End  -->
    </body>
</html>
