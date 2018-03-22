<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">

    <title></title>

 
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
		<script type="text/javascript">
			window.UEDITOR_HOME_URL = '/web/marx/Application/Admin/View/Public/Js/ueditor/';
		</script>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/ueditor/ueditor.config.js"></script>  <!-- 配置文件 -->
		<script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/ueditor/ueditor.all.min.js"></script>  <!-- 编辑器源码文件 -->
    <script type="text/javascript" >
			
			window.onload = function(){
				//window.UEDITOR_CONFIG.initialFrameWidth = 1200;  //指定编辑器宽度
				window.UEDITOR_CONFIG.initialFrameHeight = 400;	 //指定编辑器高度
				
				var ue = UE.getEditor('content');  // 实例化编辑器
				//editor.setContent('<h1>建国</h1>');
			}
	</script>
	<style type="text/css">
			option{
        color:#000;
        background:#eee;
      }
	</style>
  </head>

<body>
	<div id="top">
	  	<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Blog/index">文章管理</a>&nbsp;>>&nbsp;<?php if($id): ?><a href="/web/marx/index.php/Admin/Blog/addBlog?id=<?php echo ($id); ?>">修改文章</a><?php else: ?><a href="/web/marx/index.php/Admin/Blog/addBlog">发布文章</a><?php endif; ?>
	</div>
	<div id="all">
		<form action="/web/marx/index.php/Admin/Blog/runAddBlog" method='post'>
			<table class="table table-bordered table-hover" >
				<tr>
					<td align="right" width='30%'>标题：</td>
					<td>
						<input class="form-control" style="width:180px" type="text" name="title" value='<?php echo ($blog["title"]); ?>'>
					</td>
				</tr>
				<tr>
					<td align="right">所属分类：</td>
					<td>
						<select name="cid" style="width:180px" >
							<option value="">====请选择分类====</option>
							<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option  value="<?php echo ($v["id"]); ?>" <?php if($blog['cate'] == $v['name']): ?>selected="selected"<?php endif; ?> <?php if($v['attr'] != 1): ?>disabled style='color:#777;background:#fff'<?php endif; ?>  > <?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">作者：</td>
					<td>
						<?php if($id): echo ($blog["author"]); ?><input type="hidden" name="author" value='<?php echo ($blog["author"]); ?>'>
						<?php else: echo ($_SESSION["username"]); ?><input type="hidden" name="author" value='<?php echo ($_SESSION["username"]); ?>'><?php endif; ?> 
					</td>
				</tr>
				<tr>
					<td align="right">日期：</td>
					<td>
						<input class="form-control" style="width:180px" type="text" name="time" <?php if($id): ?>value="<?php echo (date('Y-m-d H:i:s',$blog["time"])); ?>"<?php else: ?>value="<?php echo (date('Y-m-d H:i:s',$time)); ?>"<?php endif; ?>>
					</td>
				</tr>
				<tr>
					<td align="right">点击次数：</td>
					<td>
						<input class="form-control" style="width:180px" type="text" name="click"  <?php if($id): ?>value="<?php echo ($blog["click"]); ?>"<?php else: ?>value=100<?php endif; ?>>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"> 
						<textarea name="content" id="content"><?php echo ($blog["content"]); ?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"> 
						<input type="hidden" name="id" value="<?php echo ($id); ?>">
						<input class="btn btn-success btn-sm" type="submit" value=<?php if($id): ?>"保存修改"<?php else: ?>"发布文章"<?php endif; ?>>
					</td>
				</tr>
			</table>
		</form>
	</div>

  </body>
</html>