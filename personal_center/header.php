<div class="admin-sidebar">
    <ul class="am-list admin-sidebar-list">
      <li><a href="admin-index.php"><span class="am-icon-home"></span> 首页</a></li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="admin-user.php" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="#"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
          <li><a href="#"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
          <li><a href="#"><span class="am-icon-calendar"></span> 系统日志</a></li>
          <li><a href="#"><span class="am-icon-bug"></span> 404</a></li>
        </ul>
      </li>
     
       <?php
      $sql_select_power = "SELECT * FROM user WHERE user_name = '$user_name'  ";
      $rs_sqlSelectP = $link ->query($sql_select_power);
      if($row = mysqli_fetch_array($rs_sqlSelectP)){
        if($row['user_power'] == 0 || $row['user_power'] == "" ){
          // echo "<li><a href='user-table.php'><span class='am-icon-table'></span>".$row['user_name']."</a></li>";
          
        }
        if($row['user_power'] == 1){
          echo "";
        }
        if($row['user_power'] == 2){
          echo "<li><a href='user-table.php'><span class='am-icon-table'></span>用户管理</a></li>";
        }
      }
       ?>
       
      <li><a href="article-table.php"><span class="am-icon-pencil-square-o"></span> 文章管理</a></li>
      <li><a href="out.php"><span class="am-icon-sign-out"></span> 注销</a></li>
    </ul>

    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-bookmark"></span> 公告</p>
        <p>时光静好，与君语；细水流年，与君同。—— YSU 论坛</p>
      </div>
    </div>

    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-tag"></span> wiki</p>
        <p>Welcome to the Amaze wiki!</p>
      </div>
    </div>
  </div>