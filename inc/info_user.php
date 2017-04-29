<?php


    $exec = "select * from users";
    $result = mysql_query($exec);




    $id = isset($_GET['id'])?$_GET['id']:'';
    $exec2 = "select * from users where id='".$id."'";
    $result2 = mysql_query($exec2);
    $res = mysql_fetch_object($result2);
    $username = isset($res->username) ? $res->username : '';
    $nickname = isset($res->nickname) ? $res->nickname : '';

?>
