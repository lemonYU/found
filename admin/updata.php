<?php

#更新信息

	session_start();
	if($_SESSION['admin']=="OK"){
	include_once '../inc/conn.php';
	// $exec="select * from yszl where id=".$_GET['id'];
	$exec="update yszl set  name='".$_POST['user_name']."',
							tel='".$_POST['user_tel']."',
							qq='".$_POST['user_qq']."',
							info='".$_POST['post_info']."',
							title='".$_POST['post_title']."' where id=".$_POST['id'];

	$result=mysql_query($exec);
	header("location:successful.php");
	}else{
		header("location:login.php");
	}
	mysql_close();
?>

