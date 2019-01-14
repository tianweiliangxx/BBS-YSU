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
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $link = new mysqli($servername, $username, $password);
    if(!$link){
        die("连接失败：".mysqli_connect_error());
    }else{
        echo '<script>console.log("连接成功")</script>';
    }
    $program_char = "utf8" ;
    mysqli_set_charset( $link , $program_char );
    // $db = "ysu";
	// mysqli_select_db($link,$db);
?>
</body>
</html>
