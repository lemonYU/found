<?php

#更新信息

	session_start();
	if($_SESSION['admin']=="OK"){
		include_once '../inc/conn.php';
        include_once 'head.php';
		// $exec="select * from yszl where id=".$_GET['id'];
		$exec="update yszl set  name='".$_POST['user_name']."',
								tel='".$_POST['user_tel']."',
								qq='".$_POST['user_qq']."',
								info='".$_POST['post_info']."',
								title='".$_POST['post_title']."' where id=".$_POST['id'];

		$result=mysql_query($exec);
    if($result){
      echo "<script>
        layer.confirm('恭喜你，信息修改成功！', {
            btn: ['确定']
        }, function(){
            window.location.href='http://found.com/admin/admin_list.php';
        });
        </script>";
    }

	}else{
        echo "<script>
            layer.confirm('信息已过期，请重新登录！', {
                btn: ['确定']
            }, function(){
                window.location.href='http://found.com/admin/login.php';
            });
            </script>";

	}
	mysql_close();
?>

