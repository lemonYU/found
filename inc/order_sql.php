<?php

#取得全部数据

$sql = "select * from yszl ORDER BY id DESC";
$result = mysql_query($sql);                  //执行sql语句，返回结果 
$amount = mysql_num_rows($result);
?>