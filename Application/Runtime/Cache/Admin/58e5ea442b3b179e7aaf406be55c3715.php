<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
  
    <title></title>
 
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
    <style type="text/css">
      tr.trdisplay{
        display:none;
      }
    </style>
    <script type="text/javascript">
      $(function(){
        $('input:radio[name="attr"]').click(function(){
          var val=$('input:radio[name="attr"]:checked').val();
          if(val == 4){  //链接
            $('#linkDiv').css('display','inline-block');
            $('input[name=href]').attr('disabled',false);
            $('#banner').addClass('trdisplay');
          }else{
            $('#linkDiv').css('display','none');
            $('input[name=href]').attr('disabled',true);
            $('#banner').removeClass('trdisplay');
          }
        });
      });
    </script>
  </head>

<body>
	<div id="top">
  		<a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Category/index">栏目管理</a>&nbsp;>>&nbsp;<?php if($pid): ?><a href="/web/marx/index.php/Admin/Category/addCate?pid=<?php echo ($pid); ?>">添加子栏目</a><?php else: ?><a href="/web/marx/index.php/Admin/Category/addCate">添加一级栏目</a><?php endif; ?>
  	</div>
	<div id='all'>
		<form action="/web/marx/index.php/Admin/Category/addCateHandle" method='post' enctype="multipart/form-data">
			<table class="table table-bordered table-hover ">
				<tr>
					<td align="right" width="30%">父级栏目名称：</td>
					<td style="padding-left:20px">
						<?php if($pid): echo ($pcate['name']); ?> <?php else: ?> 一级栏目<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td align="right">栏目名称：</td>
					<td>
						<input class="form-control" type="text" name="name">
					</td>
				</tr>
       <!--  <tr>
          <td align="right">栏目属性：</td>
           <td>
            <label><input type="radio" name="attr" checked value="1">列表</label>&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="attr" value="2">文章</label>
          </td> 

          <td>
             
             
            <label><input type="radio" name="attr" checked value="3">允许子栏目</label>&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="attr" checked value="1">列表</label>&nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="attr" value="2">文章</label>
          </td>
        </tr> -->

        <tr>
          <td align="right">栏目属性：</td>
           <td>
              <label><input type="radio" name="attr" checked value="3">栏目</label>&nbsp;&nbsp;&nbsp;
              <br>
              <div style="background:#eee;display:inline-block;">  
                <label><input type="radio" name="attr" value="1">列表</label>&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="attr" value="2">文章</label>&nbsp;&nbsp;&nbsp;
                <span style="display: inline-block;"> <label>(无子栏目)</label></span>
              </div>
              <br>
              <label><input type="radio" name="attr" value="4" id="link">链接</label>&nbsp;&nbsp;&nbsp;
              <div id="linkDiv" style="display:none">
                <input style="display:inline-block;width:200px"  class="form-control" type="text" name="href" disabled="true"><span style="color:red">*请填写链接</span>
              </div>
              
            </td>
         <!--  <?php if($pcate['attr'] == 3): ?><td>
              <label><input type="radio" name="attr" checked value="1">列表</label>&nbsp;&nbsp;&nbsp;
              <label><input type="radio" name="attr" value="2">文章</label>
            </td>
          <?php else: ?> 
            <td>
              <label><input type="radio" name="attr" checked value="3">栏目</label>&nbsp;&nbsp;&nbsp;
              <br>
              <div style="background:#eee;display:inline-block;">  
                 <label><input type="radio" name="attr" value="1">列表</label>&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="attr" value="2">文章</label>&nbsp;&nbsp;&nbsp;
                <span style="display: inline-block;"> <label>(无子栏目)</label></span>
              </div>
            </td><?php endif; ?> -->
         
        </tr>
				<tr>
					<td align="right">排序：</td>
					<td>
						<input class="form-control" type="text" name="sort">
					</td>
				</tr>
        <?php if(!$pid): ?><!-- 一级栏目 -->
          <tr id="banner" class="a">
            <td align="right" width="30%">栏目页面banner图片：</td>
            <td>
              <input type="file" name="photo" style="display:inline-block"><span style="color:red">（图片大小1000*220像素）</span>
            </td>
          </tr><?php endif; ?>
				<tr>
					<td colspan="2" align="center" id="submitp"> 
						<input type="hidden" name="pid" value="<?php echo ($pid); ?>" >
						<input class="btn btn-success btn-sm" type="submit" value="保存添加" id="submit">
					</td>
				</tr>
		</form>
	</div>
  </body>
</html>