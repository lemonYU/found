<?php

#翻页的数据

$result = mysql_query($sql);                  //执行sql语句，返回结果 
$amount = mysql_num_rows($result);
//$_GET['page']=isset($_GET['page'])?$_GET['page']:'';
if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = intval($_GET['page']);
}//如果传值存在且传值不为空，那么就给对应的页值。
else {
    $page = 1;
} //判断传值是否存在，如果不存在，那么就是第1页。
// 每页数量
$page_size = 4;
//mysql_select_db($db);                       //链接数据库 
//mysql_query("set names utf8");            //解决中文乱码问题 
$_GET['info'] = isset($_GET['info']) ? $_GET['info'] : '';
$_GET['info_page'] = isset($_GET['info_page']) ? $_GET['info_page'] : '';
switch ($_GET['info']) {
    case 'guashi'://如果是'挂失'
        $sql = "select * from yszl where fabu = 1 ";
        $result = mysql_query($sql);                  //执行sql语句，返回结果 
        $amount = mysql_num_rows($result);
        $sql = "select * from yszl where fabu = 1 ORDER BY id desc limit " . ($page - 1) * $page_size . ", $page_size"; //挂失的sql语句 
        $info_page = '?info=guashi'; //挂失信息
        break;
    case 'zhaoling'://如果是'招领'
        $sql = "select * from yszl where fabu = 2 ";
        $result = mysql_query($sql);                  //执行sql语句，返回结果 
        $amount = mysql_num_rows($result);
        $sql = "select * from yszl where fabu = 2 ORDER BY id desc limit " . ($page - 1) * $page_size . ", $page_size"; //招领的sql语句 
        $info_page = '?info=zhaoling'; //招领信息
        break;
    default:
        $sql = "select * from yszl ORDER BY id desc limit " . ($page - 1) * $page_size . ", $page_size"; //sql语句 
        $info_page = '?info=all'; //全部信息
        break;
}
$result = mysql_query($sql);                  //执行sql语句，返回结果 
?>