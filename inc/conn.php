<?php

#数据库连接

include_once 'config.php';
$conn = @mysql_connect($host,$user,$password) or die("no sql<br /><a href='install.php'>点击安装</a>"); //打开MySQL服务器连接 
mysql_select_db($db);   //链接数据库 
mysql_query("set names utf8");  //解决中文乱码问题
date_default_timezone_set("Asia/Shanghai");
?>