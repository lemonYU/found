<?php

#具体单个帖子的数据

$exec = "select * from yszl where id=" . $_GET['id'];  //根据id来选择数据
$result = mysql_query($exec);
$row_stat = mysql_num_rows($result);
$rs = mysql_fetch_object($result);
$name = $rs->name;
$qq = $rs->qq;
$tel = $rs->tel;
$title = $rs->title;
$info = $rs->info;
$id = $rs->id;
$xx = $rs->fabu;
if (($xx) == "1") {
    $xx = "挂失信息";
} else {
    $xx = "招领信息";
}
?>