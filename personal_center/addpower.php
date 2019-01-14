<?php
    include "connetSql.php";
    $db = "ysu";
	mysqli_select_db($link,$db);
    $id = $_GET['user_id'];
    echo $id;   
    $sql_power = "UPDATE user SET user_power='1'WHERE user_id = '$id'";
    $rs_power = $link -> query($sql_power);
    if($rs_power){
        header('Refresh:0,Url=user-table.php');
        echo "<script>alert('该用户已成为版主')</script>";
    }else{
        echo "<script>alert('修改失败')</script>";
    }
?>