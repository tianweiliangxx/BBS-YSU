<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $_SESSION = array(); // 把session清空。
    session_destroy(); //失去所有已存储的 session 数据。
    header('Refresh:0,Url=../');  // 跳到登录页面
    echo "<script>alert('当前账号退出，返回登录注册界面')</script>";
?>
</body>
</html>
