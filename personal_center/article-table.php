<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze后台管理系统模板HTML 表格页面 - cssmoban</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->


<?php
  include "header-top.php";
?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php
    include "header.php";
  ?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章管理</strong> / <small>Table</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>

            <div class="am-form-group am-margin-left am-fl">
              <select>
                <option value="option1">所有类别</option>
                <option value="option2">IT业界</option>
                <option value="option3">数码产品</option>
                <option value="option3">笔记本电脑</option>
                <option value="option3">平板电脑</option>
                <option value="option3">只能手机</option>
                <option value="option3">超极本</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="am-u-md-3 am-cf">
        <div class="am-fr">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn am-btn-default" type="button">搜索</button>
                </span>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">简介</th><th class="table-author">作者</th><th class="table-date">发布时间</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
          <?php 
          $sql_select_powera = "SELECT * FROM user WHERE user_name = '$user_name'  ";
          $rs_sqlSelectPa = $link ->query($sql_select_powera);
              if($rowa = mysqli_fetch_array($rs_sqlSelectPa)){
                echo $rowa['user_power'];
                if($rowa['user_power'] == 0){
                  $sql_user = "SELECT * FROM article WHERE art_uname='$row[user_name]'";
                  $rs_sqlUser = $link->query($sql_user);
                  while ($row_users = mysqli_fetch_array($rs_sqlUser)) {
                    echo "<tr>";
                    echo "<td><input type='checkbox'/></td>";
                    echo "<td>".$row_users['art_id']."</td>";
                    echo "<td><a href='#'>".$row_users['art_name']."</a></td>";
                    echo "<td>".$row_users['art_intro']."</td>";
                    echo "<td>".$rowa['user_username']."</td>";
                    echo "<td>".$row_users['art_time']."</td>";
                    echo "<td>";
                    echo "<div class='am-btn-toolbar'>";
                      echo "<div class='am-btn-group am-btn-group-xs'>";
                          echo "<button class='am-btn am-btn-default am-btn-xs am-text-secondary'><span class='am-icon-pencil-square-o'></span> 编辑</button>";
                          echo "<button class='am-btn am-btn-default am-btn-xs'><span class='am-icon-copy'></span> 复制</button>";
                          echo "<button class='am-btn am-btn-default am-btn-xs am-text-danger'><span class='am-icon-trash-o'></span> 删除</button>";
                          echo "</div>";
                        echo "</div>";
                      echo "</td>";
                    echo "</tr>";
                  }
                }
                if($rowa['user_power'] == 1){
                  $sql_user = "SELECT * FROM article";
                  $rs_sqlUser = $link->query($sql_user);
                  while ($row_users = mysqli_fetch_array($rs_sqlUser)) {
                    echo "<tr>";
                    echo "<td><input type='checkbox'/></td>";
                    echo "<td>".$row_users['art_id']."</td>";
                    echo "<td><a href='#'>".$row_users['art_name']."</a></td>";
                    echo "<td>".$row_users['art_intro']."</td>";
                    echo "<td>".$row_users['art_author']."</td>";
                    echo "<td>".$row_users['art_time']."</td>";
                    echo "<td>";
                    echo "<div class='am-btn-toolbar'>";
                      echo "<div class='am-btn-group am-btn-group-xs'>";
                          echo "<button class='am-btn am-btn-default am-btn-xs am-text-secondary'><span class='am-icon-pencil-square-o'></span> 编辑</button>";
                          echo "<button class='am-btn am-btn-default am-btn-xs'><span class='am-icon-copy'></span> 复制</button>";
                          echo "<button class='am-btn am-btn-default am-btn-xs am-text-danger'><span class='am-icon-trash-o'></span> 删除</button>";
                          echo "</div>";
                        echo "</div>";
                      echo "</td>";
                    echo "</tr>";
                  }
                }
                if($rowa['user_power'] == 2){
              $sql_user = "SELECT * FROM article";
              $rs_sqlUser = $link->query($sql_user);
              while ($row_users = mysqli_fetch_array($rs_sqlUser)) {
                echo "<tr>";
                echo "<td><input type='checkbox'/></td>";
                echo "<td>".$row_users['art_id']."</td>";
                echo "<td><a href='#'>".$row_users['art_name']."</a></td>";
                echo "<td>".$row_users['art_intro']."</td>";
                echo "<td>".$row_users['art_author']."</td>";
                echo "<td>".$row_users['art_time']."</td>";
                echo "<td>";
                echo "<div class='am-btn-toolbar'>";
                  echo "<div class='am-btn-group am-btn-group-xs'>";
                      echo "<button class='am-btn am-btn-default am-btn-xs am-text-secondary'><span class='am-icon-pencil-square-o'></span> 编辑</button>";
                      echo "<button class='am-btn am-btn-default am-btn-xs'><span class='am-icon-copy'></span> 复制</button>";
                      echo "<button class='am-btn am-btn-default am-btn-xs am-text-danger'><span class='am-icon-trash-o'></span> 删除</button>";
                      echo "</div>";
                    echo "</div>";
                  echo "</td>";
                echo "</tr>";
              }
            }
          }
            ?>
          </tbody>
        </table>
          <div class="am-cf">
             共 15 条记录
              <div class="am-fr">
                <ul class="am-pagination">
                  <li class="am-disabled"><a href="#">«</a></li>
                  <li class="am-active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
          </div>
          <hr />
          <p>注：.....</p>
        </form>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="assets/js/app.js"></script>
</body>
</html>
