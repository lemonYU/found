<?php

#网站信息更新

session_start();
if ($_SESSION['admin'] == "OK") {
    include_once '../inc/conn.php';
    include_once 'head.php';
    $exec = "select * from webinfo";
    $exec = "update webinfo set webname ='" . $_POST['post_name'] . "',webmail = '" . $_POST['post_mail'] . "',webqq = '" . $_POST['post_qq'] . "'"; //修改站点信息
    $result = mysql_query($exec);
if($result){
      echo "<script>
        layer.confirm('恭喜你，信息修改成功！', {
            btn: ['确定']
        }, function(){
            window.location.href='index.php';
        });
        </script>";
    }

    }else{
        echo "<script>
            layer.confirm('信息已过期，请重新登录！', {
                btn: ['确定']
            }, function(){
                window.location.href='login.php';
            });
            </script>";

    }
    mysql_close();
?>

