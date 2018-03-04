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
  <script type="text/javascript">
  	$(function(){ 
  		$('.add_role').click(function(){ 
  			var obj = $(this).parents('tr').clone(true);
  			obj.find('.add_role').remove();//将其他行的“添加一个角色”按钮去掉
  			$('#last').before(obj);
  		});
  		$('.del_role').click(function(){ 
	  		$(this).parents('tr').remove();
  		});
  	});
  </script>
  <body>
  	<div id="top">
  		<a href="/web/marx/index.php?s=/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php?s=/Admin/Rbac/index">用户管理</a>&nbsp;>>&nbsp;<?php if($user): ?><a href="/web/marx/index.php?s=/Admin/Rbac/addUser?id=<?php echo ($id); ?>">修改角色</a><?php else: ?><a href="/web/marx/index.php?s=/Admin/Rbac/addUser">添加用户</a><?php endif; ?>
  	</div>
	<div id="all" >
		<form action="/web/marx/index.php?s=/Admin/Rbac/addUserHandle" method="post">
			<table class="table table-bordered table-hover" >
				<tr>
					<td align="right" width='30%'>用户账号：</td>
					<td>
						<?php if($user): echo ($user["username"]); ?>
						<?php else: ?><input class="form-control" type="text" name='username'><?php endif; ?>				
					</td>
				</tr>
				<?php if($user): else: ?><!--更改角色时，省略密码-->
					<tr>
						<td align="right">
							<?php if($user): ?>新密码：
							<?php else: ?>密码：<?php endif; ?>		
						</td>
						<td>
							<input class="form-control" type="password" name="password" >
						</td>
					</tr>
					<tr>
						<td align="right">确认密码：</td>
						<td>
							<input class="form-control" type="password" name="password2">
						</td>
					</tr><?php endif; ?>
				<!--列出已有角色-->
				<?php if($user): if(is_array($user["role"])): $i = 0; $__LIST__ = $user["role"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							<td align="right">所属角色：</td>
							<td>
								<input type="hidden" name="role_id[]" value="<?php echo ($v["id"]); ?>">	
								<?php echo ($v["name"]); ?><button type="button" class="btn btn-danger btn-sm del_role">取消</button>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
				<tr>
					<td align="right">所属角色：</td>
					<td>	
						<select name="role_id[]">
							<option value="">请选择角色</option>
							<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
						</select>
						<button type="button" class="btn btn-primary btn-sm add_role">添加一个角色</button>
						<button type="button" class="btn btn-danger btn-sm del_role">取消</button>
					</td>
				</tr>
				<input type="hidden" name="id" value="<?php echo ($id); ?>">
				<tr id="last">
					<td colspan='2' align="center" id="submitp">
						<input class="btn btn-success btn-sm" type="submit" value="保存添加" id="submit">
					</td>
				</tr> 
				
			</table>
			
		</form>
			
	</div>

  </body>
</html>