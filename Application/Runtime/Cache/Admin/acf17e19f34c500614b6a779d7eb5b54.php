<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Application/Admin/View/Public/Js/status.js"></script>
    
  
    <link rel="stylesheet" href="/Application/Admin/View/Public/Css/bootstrap.min.css" >
	<link rel="stylesheet" href="/Application/Admin/View/Public/Css/top.css" />
 
	  <style type="text/css">
	  th,td{ 
	  	text-align:center;	
	  }
	  </style>
	  <script type="text/javascript">
	  		//js外部文件中不能解析URL变量
	 		var url = '/index.php?s=/Admin/Rbac/status';
	 		var table = 'user';
	 		$(function(){ 
	 			
	 		});
	 		function del(id){
        if(confirm('确定要删除吗？')){
          window.location = "/index.php?s=/Admin/Rbac/delUser?id="+id;
        }
      }
	  </script>
  </head>
  
  <body>
	<div id="top">
  		<a href="/index.php?s=/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/index.php?s=/Admin/Rbac/index">用户管理</a>&nbsp;>>&nbsp;<a href="/index.php?s=/Admin/Rbac/index">用户列表</a>
  	</div>
	<div id="all" >
		<form action="/index.php?s=/Admin/Rbac/" method="post">
			<table class="table table-bordered table-hover" >
				<tr>
					<th width='5%'>ID</th>
					<th width='17%'>用户名</th>
					<th width='15%'>上次登录时间</th>
					<th width='15%'>上次登陆IP</th>
					<th width='10%'>开启状态</th>
					<th width='15%'>用户角色</th>
					<th width='23%'>操作</th>
				</tr>
				<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
						<td valign="middle"><?php echo ($v["id"]); ?></td>
						<td><?php echo ($v["username"]); ?></td>
						<td><?php echo (date('Y-m-d H:i',$v["logintime"])); ?></td>
						<td><?php echo ($v["loginip"]); ?></td>
						<td>
							<div class="out">
								<div class="span" id="<?php echo ($v["id"]); ?>"><?php if($v["status"]): ?>ON<?php else: ?>OFF<?php endif; ?></div>
								<div class="in"></div>
							</div>
						</td>
						<td>
							<?php if($v["username"] == C("RBAC_SUPERADMIN")): ?>超级管理员
							<?php else: ?>
								<ul>
									<?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li> <?php echo ($value["name"]); if($value['status'] == 0): ?><span style='color:#F0AD4E' class='glyphicon glyphicon-exclamation-sign'></span><?php endif; ?></li><?php endforeach; endif; ?>
								</ul><?php endif; ?>
						</td>
						<td>
							[<a href="/index.php?s=/Admin/Rbac/addUser?id=<?php echo ($v['id']); ?>">修改角色</a>]
							[<a href="/index.php?s=/Admin/Rbac/savePass?id=<?php echo ($v['id']); ?>">修改密码</a>]
							[<a href="javascript:del('<?php echo ($v["id"]); ?>');">删除用户</a>]
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class=" pages"><?php echo ($page); ?></div>
		</form>	
	</div>
  </body>
</html>