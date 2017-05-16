<?php
  #管理 - 密码

  session_start();
  include_once '../inc/conn.php';
  if ($_SESSION['admin'] == "OK") {
    require_once 'head.php';

?>
                <div class="col-lg-10 col-md-10">
                    <h4 align="center">用户信息管理</h4>

                    <form class="form-horizontal" action="user_insert.php" method="post" >
                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">账号</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="username"   name="username" placeholder="请输入账号">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nickname" class="col-sm-3 control-label">姓名</label>
                        <div class="col-sm-6">
                          <input type="text" required class="form-control" id="nickname"  name='nickname' placeholder="请输入昵称">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">重新输入密码</label>
                        <div class="col-sm-6">
                          <input type="password" required class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                      </div>
                    <div class="col-sm-3 col-sm-offset-3">
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