<?php

#更新密码

session_start();
if ($_SESSION['admin'] == "OK") {
    include_once '../inc/conn.php';
    include_once 'head.php';
    $exec = "UPDATE `users` SET `password` = '" . sha1($_POST['password']) ."' , `nickname` = '" . $_POST['nickname'] . "' WHERE `id` ='" . $_POST['id'] . "'";
    $result = mysql_query($exec);
    mysql_close();
    if($_POST['username'] ==$_SESSION['user']){
        session_unset();
        session_destroy();
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script>

          layer.msg('修改密码成功<br>请使用新密码登录！', {
            time: 999999999999//2s后自动关闭
            ,btn: [ '确定']
            ,success: function(layero){
                var btn = layero.find('.layui-layer-btn');
                btn.find('.layui-layer-btn0').attr({
                    href: 'http://found.com/admin/login.php'
                    ,target: '_self'
                });
              }
          });
        </script>";
    }else{
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script>
            layer.msg('恭喜你<br>修改密码成功！', {
                time: 999999999999//20s后自动关闭
                ,btn: ['确定']
                ,success: function(layero){
                var btn = layero.find('.layui-layer-btn');
                    btn.find('.layui-layer-btn0').attr({
                        href: 'http://found.com/admin/user_list.php'
                        ,target: '_self'
                    });
                  }
            });
        </script>";
    }

} else {
    header("location:login.php");
}
?>
</body>
</html>

