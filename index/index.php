<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>欢迎来到YSU论坛</title>
<meta name="keywords" content="" />
<meta name="description" content="主题的个人博客模板，优雅、稳重、大气,低调。" />
<link href="css/base.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="#"></a></div>
  <nav class="topnav" id="topnav"><a href="index.html"><span>首页</span><span class="en">Protal</span></a><a href="about.html"><span>内容</span><span class="en">index</span></a><a href="newlist.html"><span>内容待定</span><span class="en">index</span></a><a href="moodlist.html"><span>内容</span><span class="en">index</span></a><a href="share.html"><span>内容</span><span class="en">index</span></a><a href="knowledge.html"><span>内容</span><span class="en">index</span></a><a href="book.html"><span>内容</span><span class="en">index</span></a></nav>
  </nav>
</header>
<div class="banner">
  <section class="box">
    <div class="avatar">
    <?php 
        //连接
        include "connetSql.php";
        //选择数据库
        $db = "ysu";
        mysqli_select_db($link,$db);
        //开启session
        session_start();
        //判断是否登陆
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
          $user_name = $_SESSION['user'];
          //根据用户名查找昵称
          $username_select = "SELECT * FROM user WHERE user_name ='{$user_name}' ";
          $res_usernameSelect = $link -> query($username_select);
          $row = mysqli_fetch_assoc($res_usernameSelect);
          echo "<a href='../personal_center/admin-index.php'><span>".$row['user_username']."</span></a>";
        }else{
          echo "<a href='../'><span>请登录</span></a>";
        }
    ?>
 </div>
  </section>
</div>
<div class="template">
  <div class="box">
    <h3>
      <p><span>YSU</span>版块浏览</p>
    </h3>
    <ul>
      <?php
        // error_reporting(0);
        $sql_plate_select = "SELECT plate_img,plate_name FROM plate";
        $plate_rs = $link->query($sql_plate_select);
        while($row_plate = mysqli_fetch_array($plate_rs)){?>
        <li><a href="../plate/index.php?plateName='<?php echo $row_plate['plate_name'] ?>'"  target="_blank"><img src="<?php echo $row_plate['plate_img']?>"></a><span><?php echo $row_plate['plate_name'] ?></span></li>
        <?php }?>
    </ul>
  </div>
</div>
<article>
  <h2 class="title_tj">
    <p>文章<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
    <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
    <figure><img src="images/001.png"></figure>
    <ul>
      <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
      <a title="/" href="template.html" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span>2013-11-04</span><span>作者：闫海亮</span></p>
    <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
    <figure><img src="images/001.png"></figure>
    <ul>
      <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
      <a title="/" href="template.html" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span>2013-11-04</span><span>作者：闫海亮</span></p>
    <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
    <figure><img src="images/001.png"></figure>
    <ul>
      <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
      <a title="/" href="template.html" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span>2013-11-04</span><span>作者：闫海亮</span><</p>
    <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
    <figure><img src="images/001.png"></figure>
    <ul>
      <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
      <a title="/" href="template.html" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span>2013-11-04</span><span>作者：闫海亮</span></p>
    <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
    <figure><img src="images/001.png"></figure>
    <ul>
      <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
      <a title="/" href="template.html" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span>2013-11-04</span><span>作者：闫海亮</span></p>
  </div>
  <aside class="right">
    <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
    <div class="news">
    <h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
      <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
      <li><a href="http://www.yingjiesheng.com/" title="应届生求职网" target="_blank">应届生求职网</a></li>
      <li><a href="http://www.cnxiaoyuan.com/" title="中国校园网" target="_blank">中国校园网</a></li>
      <li><a href="https://www.ysu.edu.cn/" title="燕山大学" target="_blank">燕山大学</a></li>
      <li><a href="http://tieba.baidu.com/f?kw=%D1%E0%C9%BD%B4%F3%D1%A7&fr=ala0&tpl=5&traceid=" title="燕山大学百度贴吧" target="_blank">燕山大学百度贴吧</a></li>
      <li><a href="https://stc.ysu.edu.cn/" title="里仁学院" target="_blank">里仁学院</a></li>
    </ul>
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
      <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 </a></li>
      <li><a href="http://www.yingjiesheng.com/" title="应届生求职" target="_blank">应届生求职网</a></li>
      <li><a href="http://www.cnxiaoyuan.com/" title="中国校园网" target="_blank">中国校园网</a></li>
      <li><a href="https://www.ysu.edu.cn/" title="燕山大学" target="_blank">燕山大学</a></li>
      <li><a href="http://tieba.baidu.com/f?kw=%D1%E0%C9%BD%B4%F3%D1%A7&fr=ala0&tpl=5&traceid=" title="燕山大学百度贴吧" target="_blank">燕山大学百度贴吧</a></li>
    </ul>
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="/">个人博客</a></li>
      <li><a href="/">谢泽文个人博客</a></li>
      <li><a href="/">3DST技术网</a></li>
      <li><a href="/">思衡网络</a></li>
    </ul> 
    </div>  
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->   
    <a href="/" class="weixin"> </a></aside>
</article>
<footer>
  <p>Design by DanceSmile More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>
