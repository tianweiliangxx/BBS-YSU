
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
	include "connetSql.php";
	$db = "ysu";
	mysqli_select_db($link,$db);
	//获取用户输入的用户名和密码
	$user = $_POST["username"];
	$psw = $_POST["psw"];
	$rd = rand(0,99999999);
	$username = "YSU会员_".$rd;
	echo $username;
	$psw_confirm = $_POST["psw_confirm"];
	$sql_serch = "select user_name from user where user_name = '$user'";
	$res_serch = $link->query($sql_serch);
	$row = mysqli_fetch_assoc($res_serch);
	if(!$row){
		$sql_insert = "insert into user (user_name,user_password,user_username) values('$user','$psw','$username')";
		$res_insert = $link->query($sql_insert);
		if($res_insert){
			header('Refresh:3,Url=index.html');
			echo "注册成功，3s后跳转到登录页面...<a href='index.html'>点击此处，直接跳转</a>";
		}else{
			header('Refresh:3,Url=register.html');
			echo "失败，3s后返回注册页面...<a href='register.html'>点击此处，直接跳转</a>";
		}
	}else{
		header('Refresh:3,Url=register.html');
		echo "用户名重复，3s后返回注册页面重新注册...<a href='register.html'>点击此处，直接跳转</a>";
	}
?>
</body>
</html>