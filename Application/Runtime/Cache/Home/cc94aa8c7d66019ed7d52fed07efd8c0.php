<?php if (!defined('THINK_PATH')) exit();?><div class="sidebar"><middle>
    <?php if(is_array($side)): $i = 0; $__LIST__ = $side;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="display:none;"><?php echo ($b=$vo["id"]); ?></p>
        <a href="<?php echo U($vo['src']);?>" class="sidetxt btn btn-default btn-lg btn-block" ><b>&nbsp;<?php echo ($vo['name']); ?>></b></a><?php endforeach; endif; else: echo "" ;endif; ?>
</middle></div>