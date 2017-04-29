<?php

#网站信息

include_once 'conn.php';
$exec = "select * from webinfo";
$result = mysql_query($exec);
$rs = mysql_fetch_object($result);

$webname = !empty($rs->webname) ? $rs->webname : '翰烽PHP失物招领留言板 v3.3.12';
$webmail = !empty($rs->webmail) ? $rs->webmail : 'developer@zzzzy.com';
$webstat = !empty($rs->webstat) ? $rs->webstat : '';
$webqq = !empty($rs->webqq) ? $rs->webqq : '1005043848';
$addname = "信息发布";
$yishi = "挂失信息";
$zhaoling = "招领信息";
?>
