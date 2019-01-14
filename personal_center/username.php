<?php
  include "connetSql.php";
  $db = "ysu";
  mysqli_select_db($link,$db);
  session_start();
  if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    $user_name = $_SESSION['user'];
    $username_select = "SELECT * FROM user WHERE user_name ='{$user_name}' ";
    $res_usernameSelect = $link -> query($username_select);
    $row = mysqli_fetch_assoc($res_usernameSelect);
    echo $row['user_username'];
  }else{
    header('Refresh:0,Url=../index.html');
    echo "<script>alert('请登录');</script>";
  }
?>
