<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    
    <title></title>
   	<script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/status.js"></script>

    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" >
 	<link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
  </head>
  <style type="text/css">
  	th,td{ 
  		text-align:center;
  	}
  </style>
  	<script type="text/javascript">
  		//js外部文件中不能解析URL变量
 		var url = '/web/marx/index.php?s=/Admin/Rbac/status';
 		var table = 'role';

    function del(id){
      if(confirm('确定要删除吗？')){
        window.location = "/web/marx/index.php?s=/Admin/Rbac/delRole?rid="+id;
      }

    }
  </script>
  <body>
  	<div id="top">
  		<a href="/web/marx/index.php?s=/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php?s=/Admin/Rbac/index">用户管理</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php?s=/Admin/Rbac/role">角色列表</a>
  	</div>
	<div id="all" >
		<form action="/web/marx/index.php?s=/Admin/Rbac/addRoleHandle" method="post">
			<table class="table table-bordered table-hover" >
				<tr>
					<th width="15%">ID</th>
					<th width="35n %">角色名称</th>
					<th width="20%">开启状态</th>
					<th width="30%">操作</th>
				</tr>
				<?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
						<td><?php echo ($v["id"]); ?></td>
						<td><?php echo ($v["name"]); ?></td>
						<td>
							<div class="out">
								<div class="span" id="<?php echo ($v["id"]); ?>"><?php if($v["status"]): ?>ON<?php else: ?>OFF<?php endif; ?></div>
								<div class="in"></div>
							</div>
						</td>
						<td>
							[<a href="<?php echo U('Admin/Rbac/addRole',array('rid'=>$v['id']));?>">配置权限</a>]&nbsp;&nbsp;
							[<a href="javascript:del('<?php echo ($v["id"]); ?>')">删除角色</a>]
						</td>
					</tr><?php endforeach; endif; ?>	
			</table>	
		</form>		
	</div>
  </body>
</html>