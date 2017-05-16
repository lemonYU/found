<?php
#管理 - 网站信息
session_start();
include_once '../inc/conn.php';
if ($_SESSION['admin'] == "OK") {
    $exec = "select * from webinfo";
    $result = mysql_query($exec);
    $rs = mysql_fetch_object($result);
    $webname = isset($rs->webname) ? $rs->webname : '';
    $webmail = isset($rs->webmail) ? $rs->webmail : '';
    $webstat = isset($rs->webstat) ? $rs->webstat : '';
    $webqq = isset($rs->webqq) ? $rs->webqq : '';
    require_once 'head.php';?>
<div class="col-lg-10">
        <h4 align='center'>网站信息编辑</h4><br>
        <form class="form-horizontal"  action="webupdata.php" method="post" name="name1" id="name1">

            <!--网站标题-->
          <div class="form-group">
              <label for="post_title" class="col-sm-2 control-label">网站标题</label>
              <div class="col-sm-8">
                <input type="text" name="post_name" required class="form-control" value='<?= $webname ?>'>
              </div>
          </div>
          <!--站长QQ-->
          <div class="form-group">

              <label for="user_name" class="col-sm-2 control-label">站长QQ</label>
              <div class="col-sm-8">

                <input type="text" required class="form-control" name="post_qq" id="post_qq" value='<?= $webqq ?>'>
              </div>
          </div>
          <!--邮箱-->
          <div class="form-group">

              <label for="user_qq" class="col-sm-2 control-label">网站邮箱</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="post_mail" id="post_mail" value='<?= $webmail ?>' placeholder="请输入邮箱">

              </div>
          </div>

         <!--网站统计-->
         <!--  <div class="form-group">

              <label for="user_tel" class="col-sm-2 control-label">网站统计</label>
              <div class="col-sm-8">
                <input type="text" required class="form-control" name="post_stat" id="post_stat" value="<?= $webstat ?>">
              </div>
          </div> -->
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
