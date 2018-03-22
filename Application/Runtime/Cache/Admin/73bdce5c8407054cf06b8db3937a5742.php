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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
 	
  </style>
  
  <body>
  <div id="top">
  	<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Index/content">后台首页</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/Index/savePass">修改密码</a>
  </div>
<div id="all" >
<form action="/web/marx/index.php/Admin/Index/savePassHandle" method="post">
	<table class="table table-bordered table-hover" >
		<tr>
			<td align="right" width='30%'>用户账号：</td>
			<td><?php echo ($_SESSION['username']); ?></td>
		</tr>
		<tr>
			<td align="right">旧密码：</td>
			<td>
				<input class="form-control" type="password" name="oldpassword" >
			</td>
		</tr>
		<tr>
			<td align="right">新密码：</td>
			<td>
				<input class="form-control" type="password" name="password" >
			</td>
		</tr>
		<tr>
			<td align="right">确认新密码：</td>
			<td>
				<input class="form-control" type="password" name="password2">
			</td>
		</tr>
		<tr>
			<td colspan='2' align="center" id="submitp">
				<input type="hidden" name='id' value="<?php echo ($_SESSION[C('USER_AUTH_KEY')]); ?>">
				<input class="btn btn-success btn-sm" type="submit" value="保存修改" id="submit">
			</td>
		</tr> 
		
	</table>
	
</form>
		
</div>

  </body>
</html>