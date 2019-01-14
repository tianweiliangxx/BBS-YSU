<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<div class="dvhead">
	<div class="dvlogo"><a href="../index/">YSU 论坛</a></div>
	<?php
		//头部信息
		include "header.php";
	?>
</div>
<div class="dvContent">
	<div class="dvquesleft">

		<div class="dvqstitle">
			<span class="qsTitle">
				<?php 
					if(isset($_GET['plateName']) && !empty($_GET['plateName'])){
						$str = $_GET['plateName']; echo $str; }
					
				?>
			</span>
			<span class="back"><ab  href="">xxx</a></span>
		</div>
		<div class="dvtabhead">
			<div class="tabheads tabcurrent">看帖</div>
			<div class="tabheads">图片</div>
			<div class="tabheads">精品</div>
			<div class="tabheads">群组</div>
		</div>
		<div class="tabContent">
			<div class="tab">
				<?php
				//查找该板块所有的帖子
				$sql_art_select = "SELECT * FROM article";
				$art_rs = $link->query($sql_art_select);
				//遍历输出帖子的内容
				while($row_art = mysqli_fetch_array($art_rs)){
					$str = $row_art['art_intro'];
						if(strlen($str)>100){
							$str = substr($str,0,100).'...';
						}
						echo "<div class="."dvques".">";
							echo "<div class="."quesContent".">";
								echo "<div class="."quesTitle".">";
									echo "<span class="."spanques"."><a href='../index/template.html'>".$row_art['art_name']."</a></span>";
								echo "</div>";
								echo "<div class="."qContent".">&nbsp;&nbsp;&nbsp;&nbsp;".$str."</div>";
								echo "<div class="."tags".">";
									echo "<span class="."tag".">作者：".$row_art['art_author']."</span><span class="."tag".">程序</span>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
				}
				?>
			</div>
			<div class="tab hidden">2</div>
			<div class="tab hidden">3</div>
			<div class="tab hidden">4</div>
		</div>
	</div>
	<div class="dvquesright">
		<div>
			<buton class="btnques" onclick="location.href='add.php'">发表帖子</buton>
		</div>
		<div class="dvorder">
			<div class="orderTitle">活跃度排行</div>
			<div class="users">
				<image class="userface" src="images/0.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>
			<div class="users">
				<image class="userface" src="images/1.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>
			<div class="users">
				<image class="userface" src="images/2.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>
			<div class="users">
				<image class="userface" src="images/3.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>
			<div class="users">
				<image class="userface" src="images/4.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>
			<div class="users">
				<image class="userface" src="images/5.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>
			<div class="users">
				<image class="userface" src="images/6.gif" />
				<div class="dvuser">
					<div class="userTitle">陈有龙</div>
					<div class="userdeital">大牛6级 豆:14006</div>
				</div>
			</div>


		</div>

	</div>

</div>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$(function()
	{

		$(".tabheads").click(function()
		{
			$(".tabheads").removeClass("tabcurrent").eq($(this).index()).addClass("tabcurrent");
			$(".tab").hide().eq($(this).index()).show();
		});
	});
</script>
<body>
</body>
</html>

