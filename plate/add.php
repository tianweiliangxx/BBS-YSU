<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>发表问题</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/head.css"/>
  <link rel="stylesheet" href="layui/css/layui.css">

<link rel="stylesheet" href="css/global.css">

<script src="layui/layui.js"></script>
</head>
<body >

<div class="dvhead">
	<div class="dvlogo"><a href="../index/">YSU 论坛</a></div>
  <?php
		include "header.php";
	?>
</div>

<div class="main layui-clear">
  <div class="fly-panel" pad20>
    <h2 class="page-title">发表问题</h2>
    
    <!-- <div class="fly-none">并无权限</div> -->

    <div class="layui-form layui-form-pane">
      <form action="add.php" method="post">
        <div class="layui-form-item">
          <label for="L_title" class="layui-form-label">标题</label>
          <div class="layui-input-block">
            <input type="text" id="L_title" name="title" required lay-verify="required" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label for="L_title" class="layui-form-label">文章介绍</label>
          <div class="layui-input-block">
            <input type="text" id="L_title" placeholder="填写帖子简介，将显示在文章标题下" name="intro" required lay-verify="required" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item layui-form-text">
          <div class="layui-input-block">
             <div class="editor">
    			<textarea id="content" name="content" style="width:1040px;height:450px;visibility:hidden;"></textarea>
  			 </div>
          </div>
          <label for="L_content" class="layui-form-label" style="top: -2px;">描述</label>
        </div>
        <div class="layui-form-item">
          <input type="submit" class="layui-btn" value="立即发布">
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    if(isset($_POST['title']) && !empty($_POST['title'])){
      $title = $_POST['title'];
      $content = $_POST['content'];
      $intro = $_POST['intro'];
      $act_time= date('Y-m-d');
      $act_sql = "INSERT INTO article (art_name,art_art,art_intro,art_time,art_author,art_uname) VALUES
      ('$title','$content',' $intro','$act_time','$row[user_username]','$row[user_name]')";
      $rs_act = $link->query($act_sql);
      if($rs_act){
       echo "<script>alert('发布成功')</script>";
      }else{
        echo "<script>alert('发布发布失败')</script>";
     } 
  }
}else{
  header('Refresh:0,Url=index.php');
  echo "<script>alert('请登陆后再进项发帖')</script>";
}
?>
 <script type="text/javascript" charset="utf-8" src="js/kindeditor.js"></script>
  <script type="text/javascript">
    KE.show({
        id : 'content',
		resizeMode : 1,
        cssPath : './index.css',
        items : [
        'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
        'removeformat', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
        'insertunorderedlist', 'emoticons', 'image', 'link']
    });
  </script>
<script>

layui.cache.page = '';
layui.cache.user = {
  username: '游客'
  ,uid: -1
  ,avatar: '../res/images/avatar/00.jpg'
  ,experience: 83
  ,sex: '男'
};
layui.config({
  version: "2.0.0"
  ,base: '../res/mods/'
}).extend({
  fly: 'index'
}).use('fly');
</script>
</body>
</html>