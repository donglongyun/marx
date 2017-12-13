<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title></title>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <!-- Bootstrap -->
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
    <style type="text/css">
      th,td{ 
        text-align:center;
      }
    </style>
  </head>

  <body>
  <div id="top">
    <a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/First/mail">首页设置</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/First/mail">邮箱管理</a>
  </div>
  <div id="all" >
      <table class="table table-bordered table-hover" >
        <tr class="firstTr">
          <th width='30%'>邮箱名称</th>
          <th width='30%'>邮箱地址</th>
          <th width='30%'>操作</th>
        </tr>
        <tr>
          <td>院长信箱</td>
          <td><?php echo ($yuanzhang); ?></td>
          <td>
            [<a href="updateMail?type=3">修改</a>]
          </td>
        </tr>
        <tr>

          <td>书记信箱</td>
          <td><?php echo ($shuji); ?></td>
          <td>
            [<a href="updateMail?type=4">修改</a>]
          </td>
        </tr>
      </table>
      
  </div>

  </body>
</html>