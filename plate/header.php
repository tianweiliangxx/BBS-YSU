<?php
		//开启session
		session_start();
		//连接数据库
		include "connetSql.php";
		$db = "ysu";
		mysqli_select_db($link,$db);
		//判断登陆
		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
			$user_name = $_SESSION['user'];
			//根据用户名查找昵称
			$username_select = "SELECT * FROM user WHERE user_name ='{$user_name}' ";
			$res_usernameSelect = $link -> query($username_select);
			$row = mysqli_fetch_assoc($res_usernameSelect);
			echo "<div class="."dvreg".">";
			echo "&nbsp;<a href='../personal_center/admin-index.php'>$row[user_username]</a>";
			echo "</div>";
		}else{
			echo "<div class="."dvsearch".">10秒钟注册账号，找到你的同学</div>";
			echo "<div class="."dvreg".">";
			echo "&nbsp;<a href='../'>登录/注册</a>";
			echo "</div>";
		  }
	?>