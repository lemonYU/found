<?php

#管理 - 首页

  session_start();
  include_once '../inc/conn.php';
  if ($_SESSION['admin'] == "OK") {
  require_once 'head.php';

  $system_info = array(
      '0' => PHP_OS,
      '1' => php_sapi_name(),
      '2' => function_exists("mysql_close") ? mysql_get_client_info() : '不支持',
      '3' => PHP_VERSION,
      '4' => ini_get('upload_max_filesize'),
  );
?>
 <div class="col-lg-10">
        <!-- 面板 -->
        <div class="panel">
            <div class="panel-heading clearfix">
                <h3 class="pull-left">管理中心 <small>控制台</small></h3>
                   
                <!-- 面包屑导航 -->
                <ol class="breadcrumb pull-right">
                  <li>
                    <span class=' glyphicon glyphicon-dashboard'></span>
                    <a href="index.php">管理中心</a>
                  </li>

                  <li class="active">控制台</li>
                </ol>
            </div>
        </div>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          作者信息 <span class='glyphicon glyphicon-user'></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <ul class="panel-body">
          <li><span>官方网站：</span><a target="_blank" href="http://www.hhailuo.com/">www.lemon.com</a></li>
          <li><span>创作人：</span>Lemon</li>

      </ul>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          系统信息 <span class='glyphicon glyphicon-wrench'></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <ul class="panel-body">
          <li><span>操作系统：</span><?php echo $system_info['0']; ?></li>
          <li><span>运行方式：</span><?php echo $system_info['1']; ?></li>
          <li><span>PHP版本：</span><?php echo $system_info['3']; ?></li>
          <li><span>MYSQL版本：</span><?php echo $system_info['2']; ?></li>
          <li><span>上传限制：</span><?php echo $system_info['4']; ?></li>
      </ul>
    </div>
  </div>
  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          个人信息 <span class="glyphicon glyphicon-sunglasses"></span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
      <ul class="panel-body">
          <li><span>用户帐号：</span><?php echo isset($username )?$username:'';?></li>
          <li><span>用户角色：</span></li>
          <li><span>上次登陆IP：</span><?php echo isset($ip )?$ip:'';?></li>
          <li><span>上次登陆时间：</span><?php echo isset($lastlogintime )?$lastlogintime:'';?></li>
      </ul>
    </div>
  </div>
</div>

<!--
              <div class="list">
                <h1><b>个人信息</b><span>Profile&nbsp; Info</span></h1>
                <ul>
                  <li><span>用户帐号:</span><?php echo isset($username )?$username:'';?></li>
                  <li><span>用户角色:</span></li>
                  <li><span>上次登陆IP:</span><?php echo isset($ip )?$ip:'';?></li>
                  <li><span>上次登陆时间:</span><?php echo isset($lastlogintime )?$lastlogintime:'';?></li>
                </ul>
              </div>
              <div class="list">
                <h1><b>系统信息</b><span>System&nbsp; Info</span></h1>
                <ul>
                  <li><span>操作系统:</span><?php echo $system_info['0']; ?></li>
                  <li><span>运行方式:</span><?php echo $system_info['1']; ?></li>
                  <li><span>PHP版本:</span><?php echo $system_info['3']; ?></li>
                  <li><span>MYSQL版本:</span><?php echo $system_info['2']; ?></li>
                  <li><span>上传限制:</span><?php echo $system_info['4']; ?></li>
                </ul>
              </div>
              <div class="list">
                <h1><b>作者信息</b><span>Compamay&nbsp; Info</span></h1>
                <ul>
                  <li><span>官方网站:</span><a target="_blank" href="http://www.hhailuo.com/">www.lemon.com</a></li>
                  <li><span>创作人:</span>Lemon</li>
                </ul>
              </div>
 -->

            <?php
            } else
                header("location:login.php");
            mysql_close();
            ?>
        </div>
        <!-- 页脚-版权信息-Start  -->
        <?php
          include_once 'foot.php'; //插入foot.php页脚信息
        ?>
        <!-- 页脚-版权信息-End  -->
    </body>

</html>

