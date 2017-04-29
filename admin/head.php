<!-- <div class=title><a href="index.php">后台首页</a> - <a href="admin_list.php">信息列表</a> - <a href="admin_info.php">网站信息</a> - <a href="admin_ad.php">广告管理</a> - <a href="admin_pw.php">密码修改</a></div> -->

<!--头部-->
<?php

    $exec2 = "select id,nickname from users where username='".$_SESSION['user']."'";
    $result2 = mysql_query($exec2);
    $res = mysql_fetch_object($result2);
    $nickname = isset($res->nickname) ? $res->nickname : '';
    $id = isset($res->id) ? $res->id : '';
?>;
<div class='ime-main'>
    <nav class="navbar navbar-default" >
        <div class="container-fluid clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand pull-left" href="index.php"> <?php echo $nickname;?></a>
            <button type="button" class="btn btn-primary btn-link hamburger" style='color:#fff'>
                <span class=" glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <div class="dropdown pull-right">
                <a class=" rLink dropdown-toggle"  data-toggle="dropdown" role="button" >
                    <span class=' glyphicon glyphicon-user'></span>
                       <?php echo $nickname;?>
                    <span class=' glyphicon glyphicon-triangle-bottom'></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="login">
                        <a href="#" class="text-center">
                            <img class="img-thumbnail img-circle" width="60px" height="60px" src="/public/admin/img/2.jpg" alt="">
                            <h4><?php echo $nickname;?></h4>
                            <p>注册于2013年9月01日</p>
                        </a>
                    </li>
                    <li class="login-btn">
                        <a href="admin_pw.php?id=<?= $id;?>" role="button" type="button" class="btn btn-primary">
                            用户信息
                        </a>
                        <a href="exit.php" role="button" type="button" class="btn btn-primary" >
                            注销登录
                        </a>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- 內容部分 -->
    <div class="container-fluid">
        <div class="row" style="height:100%">
            <div class="col-lg-2">
                <!-- 用户信息 -->
                <div class="user clearfix">
                    <div class="pic pull-left">
                        <img class="img-circle" width="45px" height="45px" src="/public/admin/img/2.jpg" alt="">
                    </div>
                    <div class="username pull-left">
                        <p class=''>Hi,<?php echo $nickname;?></p>
                        <i></i>
                        <span>在线</span>
                    </div>
                </div>
                <!-- 輸入框 -->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="操作">
                    <button type='submit' class='btn btn-default btn-link' style='cursor:pointer'>
                        <span class='glyphicon glyphicon-search form-control-feedback'></span>
                    </button>
                </div>
                <!-- 面板 -->
                <div class="panel">
                    <div class="panel-heading">
                        <a href="#">
                            <span class=' glyphicon glyphicon-dashboard'></span>
                            控制台
                        </a>
                    </div>
                </div>

                <!-- 列表組 -->
                <ul class='list-group' id="accordion">
                    <li class='list-group-item'>
                        <a href="#catagory" class='ime-click' data-toggle="collapse"  aria-expanded="true" data-parent="#accordion">
                            <span class='glyphicon glyphicon-th-large'></span>
                            分类
                            <span class='glyphicon glyphicon-menu-left pull-right'></span>
                        </a>
                        <ul class="panel-collapse collapse" id="catagory">
                            <li>
                                <a href="admin_list.php">
                                    <span class=' glyphicon glyphicon-list'></span>
                                    分类列表

                                </a>
                            </li>
                            <li>
                                <a href="/admin/cats/add">
                                    <span class=' glyphicon glyphicon-edit'></span>
                                    分类添加
                                </a>
                            </li>
                        </ul>
                    </li>

                     <li class='list-group-item'>
                        <a href="admin_list.php?info=zhaoling"  class='ime-click'>
                            <span class='glyphicon glyphicon-tag'></span>
                            招领信息管理
                        </a>
                    </li>
                     <li class='list-group-item'>
                        <a href="admin_list.php?info=guashi"  class='ime-click'>
                            <span class='glyphicon glyphicon-tag'></span>
                            挂失信息管理
                        </a>
                    </li>
                    <li class='list-group-item'>
                        <a href="admin_info.php"  class='ime-click'>
                            <span class='glyphicon glyphicon-tag'></span>
                            自定义网站信息
                        </a>
                    </li>

                    <li class='list-group-item'>
                        <a href="user_list.php"  class='ime-click'>
                            <span class='glyphicon glyphicon-tag'></span>
                            用户管理
                        </a>
                    </li>
                </ul>
            </div>
