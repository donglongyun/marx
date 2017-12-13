<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    
    <title></title>
     <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
     <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/checked.js"></script>
    
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
  
    <style type="text/css">

    </style>
    <script type="text/javascript">
	
  </script>
  </head>
  
  <body>
  <div id="top">
  	<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Rbac/index">用户管理</a>&nbsp;>>&nbsp;<?php if($role == null): ?><a href="/web/marx/index.php/Admin/Rbac/addRole">添加角色</a><?php else: ?><a href="/web/marx/index.php/Admin/Rbac/addRole?rid=<?php echo ($role['id']); ?>">配置权限</a><?php endif; ?>
  </div>
	<div id="all" >
		<form action="/web/marx/index.php/Admin/Rbac/addRoleHandle" method="post">
			<table class="table table-bordered table-hover " >
				
				<tr>
					<td align="right" width="20%">角色名称：</td>
					<td>
						<?php if($role['name'] == null): ?><input class="form-control" type="text" name='name'>
						<?php else: echo ($role["name"]); endif; ?>
					</td>
				</tr>
				<tr>
					<td align="right">是否开启：</td>
					<td>	
						<label>
							<input type="radio" name="status" value="1" <?php if($role): ?>disabled='disabled'<?php endif; ?> <?php if($role): if($role['status'] == 1): ?>checked="chcked"<?php endif; else: ?>checked="chcked"<?php endif; ?>>&nbsp;开启&nbsp;
						</label>
						<label>
							<input type="radio" name="status" value="0" <?php if($role): ?>disabled='disabled'<?php endif; ?> <?php if($role): if($role['status'] == 0): ?>checked="chcked"<?php endif; endif; ?>>&nbsp;关闭&nbsp;
						</label>
					
					</td>
				</tr>
				<tr>
					<td align='right'>分配权限：</td>
					<td id='wrap'>
							
								<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
										<p>
											<label>
												<strong><?php echo ($app["title"]); ?></strong>
												<input type="checkbox" name="access[]" value="<?php echo ($app["id"]); ?>_<?php echo ($app["level"]); ?>" pid="<?php echo ($app["pid"]); ?>" level='<?php echo ($app["level"]); ?>' <?php if($app["access"]): ?>checked='checked'<?php endif; ?>>
											</label>
										</p>
										<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
												<dt>
													<label>
														<strong><?php echo ($action["title"]); ?></strong>
														<input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_<?php echo ($action["level"]); ?>" pid="<?php echo ($action["pid"]); ?>" level='<?php echo ($action["level"]); ?>' <?php if($action["access"]): ?>checked='checked'<?php endif; ?>>
													</label>
												</dt>
												<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
														<label>
															<span><?php echo ($method["title"]); ?></span>
															<input type="checkbox" name="access[]" value="<?php echo ($method["id"]); ?>_<?php echo ($method["level"]); ?>" pid="<?php echo ($method["pid"]); ?>" level='<?php echo ($method["level"]); ?>' <?php if($method["access"]): ?>checked='checked'<?php endif; ?>>
														</label>								
													</dd><?php endforeach; endif; ?>
											</dl><?php endforeach; endif; ?>
									</div><?php endforeach; endif; ?>
						<input type="hidden" name='rid' value="<?php echo ($rid); ?>">
					</td>
				</tr>
				<tr>
					<td colspan='2' align="center" id="submitp">
						<input class="btn btn-success btn-sm" type="submit" value="保存添加" id="submit">
					</td>
				</tr> 
			</table>
			
		</form>	
	</div>
  </body>
</html>