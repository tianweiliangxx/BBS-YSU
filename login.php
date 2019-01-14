<?php
    include "connetSql.php";
    $db = "ysu";
    mysqli_select_db($link,$db);
    session_start();
    $user = $_POST['user'];
    $psw = $_POST['psw'];

    $sql = "select user_name,user_password from user where user_name='{$user}' and user_password='{$psw}'";
    $rs = $link->query($sql);
    $row = mysqli_fetch_assoc($rs);
    if($row){
        if($user == $row['user_name'] && $psw == $row['user_password']){
            $_SESSION['user'] = $user;
            header("Refresh:3,Url=index/index.php");
            echo "登陆成功,3s后跳转到主页面...<a href='index/index.php'>点击此处，直接跳转</a>";
                }
        }else{
            echo "用户或密码输入错误";
            exit();
        }
?>