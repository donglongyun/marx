<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title></title>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
  	<style type="text/css">
	  	th,td{ 
	  		text-align:center;
	  	}
  	</style>
  	<script type="text/javascript">
  		$(function(){ 
  			$('tr').each(function(){ 
  				if($(this).find('.level').text() == 1){ 
  					$(this).css('background','#E5EEF7');
  				}
  			});
  		});

      function del(id){ 
        if(confirm('确定要删除吗？')){ 
          window.location = "/web/marx/index.php/Admin/Category/delete?id="+id;
        }
      }
  	</script>
  </head>
  <body>
	<div id="top">
  		<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Category/index">栏目管理</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/Category/index">栏目列表</a>
  	</div>
	<div id='all'>
		<form action="/web/marx/index.php/Admin/Category/sortCate" method="post">
			<table class="table table-bordered table-hover" >
				<tr class="firstTr">
						<th width='5%'>ID</th>
						<th width='30%'>名称</th>
						<th width='10%'>级别</th>
            <th width='15%'>属性</th>
						<th width='10%'>排序</th>
						<th width='30%'>操作</th>
				</tr>
				<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
						<td><?php echo ($v["id"]); ?></td>
						<td style='text-align:left;padding-left:10%'><?php echo ($v["html"]); echo ($v["name"]); ?></td>
						<td class="level"><?php echo ($v["level"]); ?></td>
            <td>
              <?php if($v['attr'] == 1): ?>列表<a href="/web/marx/index.php/Admin/Category/bloglist?cid=<?php echo ($v['id']); ?>">[查看]</a>
              <?php elseif($v['attr'] == 2): ?>
                文章
              <?php elseif($v['attr'] == 3): ?>
                栏目
              <?php else: ?>
                链接<a href="<?php echo ($v['src']); ?>">[查看]</a><?php endif; ?>
            </td>
						<td>
							<input class="form-control" type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" style='width:50%;margin:0 auto;text-align:center'/>
						</td>
						<td>
             <!--  <?php if($v[level] < 3): ?>--> <!-- 1,2级栏目允许添加子栏目 -->
               <!--  <?php if($v[attr] == 3): ?>--> 
                 
                <!--<?php endif; ?> -->
              <!--<?php endif; ?> -->
              <?php if($v[level] < 100): ?><!-- 1,2级栏目允许添加子栏目 -->
                <?php if($v[attr] == 3): ?>[<a href="/web/marx/index.php/Admin/Category/addCate?pid=<?php echo ($v['id']); ?>">添加子栏目</a>]<?php endif; endif; ?>
              [<a href="/web/marx/index.php/Admin/Category/updateCate?id=<?php echo ($v['id']); ?>">修改</a>]
							[<a href="javascript:del(<?php echo ($v['id']); ?>)">删除</a>]
						</td>
					</tr><?php endforeach; endif; ?>
				<tr>
					<td colspan="4"></td>
					<td align="center">
						<input class="btn btn-success btn-sm" type="submit" value="排序"  style="margin:0 auto" />
					</td>
					<td></td>

				</tr>
				
			</table>
			
		</form>
	</div>
  </body>
</html>