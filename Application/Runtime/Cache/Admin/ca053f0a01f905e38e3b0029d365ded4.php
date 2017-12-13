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
    <script type="text/javascript">
      function del(id){ 
        if(confirm('确定要删除吗？')){ 
          window.location = "/web/marx/index.php/Admin/First/delRoll?id="+id;
        }
      }
    </script>
  </head>
  
  <body>
	<div id="top">
		<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/First/roll">首页设置</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/First/roll">滚动图片</a>
	</div>
	<div id="all" >
		<a class='btn btn-primary' href="/web/marx/index.php/Admin/First/addRoll" style="margin:5px">添加图片</a>
		<form action="/web/marx/index.php/Admin/First/sortRoll" method="post">
			<table class="table table-bordered table-hover" >
				<tr>
					<th  width='30%'>图片展示</th>
					<th  width='20%'>图片标题</th>
					<th  width='20%'>文章链接地址</th>
          <th  width='10%'>图片排序</th>
					<th  width='20%'>操作</th>
				</tr>
				<?php if(is_array($roll)): $i = 0; $__LIST__ = $roll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						<td><img src="/web/marx/Public/Uploads/<?php echo ($v["src"]); ?>" width='224px' height='145px'> </td>
						<td><?php echo ($v["title"]); ?></td>
            <td><?php echo ($v["href"]); ?></td>
						<td><input class='form-control' type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" style="width:50%;margin:0 auto;text-align:center"></td>
						<td>
							[<a href="/web/marx/index.php/Admin/First/updateRoll?id=<?php echo ($v['id']); ?>">修改</a>]
              [<a href="javascript:del(<?php echo ($v['id']); ?>)">删除</a>]
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<tr>
					<td colspan="3"></td>
					<td>
						<input class="btn btn-success btn-sm" type="submit" value="排序" style="margin:0 auto;">
					</td>
					<td></td>
				</tr>
			</table>
			
		</form>
			
	</div>


  </body>
</html>