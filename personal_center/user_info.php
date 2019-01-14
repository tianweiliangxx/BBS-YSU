<?php
    // include "connetSql.php";

    // //选择连接的数据库
    // $db = "ysu";
    // mysqli_select_db($link,"$db");

    // //开启session
    // session_start();
    // $user = $_SESSION['user'];
    //获取传过来的信息
    if(isset($_GET['name']) && !empty($_GET['name'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $telephone = $_GET['telephone'];
    $qq = $_GET['qq'];
    $weibo = $_GET['weibo'];
    $intro = $_GET['intro'];
    //修改信息
    $info_updata = "UPDATE user
    SET user_username = '$name',user_email = '$email',user_telephone = '$telephone',user_qq = '$qq',user_weibo = '$weibo',user_intro = '$intro'
    WHERE user_name ='$user_name'";

    //发送语句
    $res_updata = $link -> query($info_updata);
    if($res_updata){
        echo "<script>alert('修改成功')</script>";
    }else{
        echo "<script>alert('修改失败')</script>";
    }
}
?>