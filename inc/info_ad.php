<?php

#广告

$exec = "select * from ad";
$result = mysql_query($exec);
$rs = mysql_fetch_object($result);
$ad_top = isset($rs->ad_top) ? $rs->ad_top : '';
$ad_foot = isset($rs->ad_foot) ? $rs->ad_foot : '';
?>
