<?php
include_once '../inc/conn.php';
$username = htmlspecialchars($_POST['username'], ENT_QUOTES);
$passwords = isset($_POST['password'])? sha1($_POST['password']):'';

$exec = "select password from users where username='$username'";
    $result = mysql_query($exec);
    if ($rs = @mysql_fetch_object($result)){

            if ($rs->password == $passwords) {//检查登陆密码
                $data = array(
                    "status"=>'1',
                    "message"=>'信息正确'
                    );
                echo json_encode($data);
            } else{
                $data = array(
                    "status"=>'0',
                    'message'=>'用户名或密码错误'
                    );
                echo json_encode($data);
            }
    }else{
        $data = array(
                    'status'=>'0',
                    'message'=>'用户名或密码错误'
                    );
                echo json_encode($data);
    }