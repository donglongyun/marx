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
          window.location = "/web/marx/index.php/Admin/First/delLink?id="+id;
        }
      }
    </script>
  </head>

  <body>
	<div id="top">
		<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/First/link">首页设置</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/First/link">链接管理</a>
	</div>
	<div id="all" >
		<a class='btn btn-primary' href="/web/marx/index.php/Admin/First/addLink" style="margin:5px">添加链接</a>
		<form action="/web/marx/index.php/Admin/First/linkSort" method="post">
			<table class="table table-bordered table-hover" >
				<tr>
					<th width='20%'>链接分类</th>
					<th width='25%'>链接名称</th>
					<th width='25%'>链接地址</th>
          <th width='10%'>排序</th>
					<th width='20%'>操作</th>
				</tr>
				<?php if(is_array($links1)): $i = 0; $__LIST__ = $links1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						<?php if($links1[0]['id'] == $v['id']): ?><td rowspan=<?php echo ($count1); ?>>校内链接</td><?php endif; ?>
						<td><?php echo ($v["name"]); ?></td>
						<td><?php echo ($v["href"]); ?></td>
            <td>
              <input class='form-control' type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" style="width:50%;margin:0 auto;text-align:center">
            </td>
						<td>
							[<a href="addLink?id=<?php echo ($v["id"]); ?>">修改</a>]
							[<a href="javascript:del('<?php echo ($v["id"]); ?>');">删除</a>]

						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php if(is_array($links2)): $i = 0; $__LIST__ = $links2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						<?php if($links2[0]['id'] == $v['id']): ?><td rowspan=<?php echo ($count2); ?>>校外链接</td><?php endif; ?>
						<td><?php echo ($v["name"]); ?></td>
						<td><?php echo ($v["href"]); ?></td>
            <td>
              <input class='form-control' type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" style="width:50%;margin:0 auto;text-align:center">
            </td>
						<td>
							[<a href="addLink?id=<?php echo ($v["id"]); ?>">修改</a>]
							[<a href="javascript:del('<?php echo ($v["id"]); ?>');">删除</a>]

						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <tr>
          <td colspan="3">
            <span style="color:red">*注意：前台页面最多显示6个，顺序不按类别，只按排序号</span>
          </td>
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