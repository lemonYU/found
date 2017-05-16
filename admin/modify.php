<?php

#修改信息

session_start();
include_once '../inc/conn.php';
if (($_SESSION['admin'] == "OK") && isset($_GET['id'])) {

    $exec = "select * from yszl where id=" . $_GET['id'];
    $result = mysql_query($exec);
    $rs = mysql_fetch_object($result);
    $name = $rs->name;
    $qq = $rs->qq;
    $tel = $rs->tel;
    $ip = $rs->ip;
    $title = $rs->title;
    $info = $rs->info;
    $ys_id = $rs->id;

    if (($rs->fabu) == '1') {
        $leibie = '挂失';
    } else {
        $leibie = '招领';
    }
    ?>

    <?php
    include_once 'head.php';
    ?>
    <div class="col-lg-10">
        <?php
            if (($rs->fabu) == '1') {
                echo "<br><h4 align='center'>挂失信息编辑</h4><br>";
            } else {
                echo "<br><h4 align='center'>招领信息编辑</h4><br>";
            }
        ?>

        <p id="hr"></p>
        <form class="form-horizontal"  action="updata.php" method="post" name="name1" id="name1">

            <div class="form-group">
              <label class="col-sm-2 control-label">ID：</label>
              <div class="col-sm-8">

                <a href='javascript::' target='_blank' class="form-control">
                    <?= $ys_id ?>
                </a><input type="hidden" name="id" value=<?= $ys_id ?>>
              </div>
            </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">分类</label>
            <div class="col-sm-8">


                  <?php if($leibie=='挂失'){
                    echo "<label class='radio-inline'><input type='radio' name='post_fabu' checked id='post_fabu' value='1'>挂失
                    </label>";
                    }
                  ?>
                 <?php if($leibie=='招领'){
                    echo "<label class='radio-inline'><input type='radio' name='post_fabu' checked id='post_fabu' value='2'>招领
                    </label>";
                    }
                  ?>
            </div>
          </div>
            <!--标题-->
          <div class="form-group">
              <label for="post_title" class="col-sm-2 control-label">标题</label>
              <div class="col-sm-8">
                <input type="text" name="post_title" required class="form-control" value='<?= $title ?>'>
              </div>
          </div>
          <!--用户名-->
          <div class="form-group">

              <label for="user_name" class="col-sm-2 control-label">姓名</label>
              <div class="col-sm-8">

                <input type="text" required class="form-control" name="user_name" id="user_name" value='<?= $name ?>'>
              </div>
          </div>
          <!--qq-->
          <div class="form-group">

              <label for="user_qq" class="col-sm-2 control-label">联系QQ</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="user_qq" id="user_qq" value='<?= $qq ?>'>

              </div>
          </div>

         <!--联系电话-->
          <div class="form-group">

              <label for="user_tel" class="col-sm-2 control-label">联系电话</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="user_tel" id="user_tel" pattern="^1[34578]\d{9}$" value="<?= $tel ?>">
              </div>
          </div>
           <!--ip-->
          <div class="form-group">
              <label for="user_tel" class="col-sm-2 control-label">IP</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" value="<?= $ip ?>">
              </div>
          </div>

          <!--描述-->
          <div class="form-group">

              <label for="post_info" class="col-sm-2 control-label">描述</label>
              <div class="col-sm-8">
                <textarea class="form-control" required rows="3" name="post_info" id="post_info"><?= $info ?></textarea>
              </div>
          </div>

          <div class="col-sm-2 col-sm-offset-2">
                <input type="submit" name="submit" class="btn btn-success pull-left" value='修改'>
                <input type="reset" name="B2" class="btn btn-default pull-left" value='重置'>
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
</html>
