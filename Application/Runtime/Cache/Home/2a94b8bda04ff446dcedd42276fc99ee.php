<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--引入jQuery文件-->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/core.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/web/marx/Public/css/main.css">
    <link rel="javascript" href="/web/marx/Public/js/main.js">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>马克思主义学院</title>
</head>
    <img src="/web/marx/Public/images/head.png" alt="headimg" width="100%" class="topimg">

    <div class="toplink">
        <ul id="nav" style="border-radius: 10px 10px 0px 0px">
        <li><a href="<?php echo U('Index/index');?>" style="color: white">首页</a>
        </li>
        <li><a href="#" style="color: white">学院概况</a>
            <ul>
                <li><a href="<?php echo U('Show/showdet?cid=3');?>">学院简介</a></li>
                <li><a href="<?php echo U('Lists/index?cid=4');?>">机构设置</a></li>
                <li><a href="<?php echo U('Lists/index?cid=5');?>">师资队伍</a></li>
                <li><a href="<?php echo U('Lists/index?cid=6');?>">规章制度</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">教学工作</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=7');?>">课程建设</a></li>
                <li><a href="<?php echo U('Lists/index?cid=8');?>">教学改革</a></li>
                <li><a href="<?php echo U('Lists/index?cid=9');?>">教学管理</a></li>
                <li><a href="<?php echo U('Lists/index?cid=10');?>">精品课程</a></li>
                <li><a href="<?php echo U('Lists/index?cid=11');?>">实践教学</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">科学研究</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=12');?>">学术动态</a></li>
                <li><a href="<?php echo U('Lists/index?cid=13');?>">科研项目</a></li>
                <li><a href="<?php echo U('Lists/index?cid=14');?>">科研成果</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">学科建设</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=15');?>">学科现状</a></li>
                <li><a href="<?php echo U('Lists/index?cid=16');?>">导师简介</a></li>
                <li><a href="<?php echo U('Lists/index?cid=17');?>">研究生培养</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">党群工作</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=18');?>">党群动态</a></li>
                <li><a href="<?php echo U('Lists/index?cid=19');?>">理论学习</a></li>
                <li><a href="<?php echo U('Lists/index?cid=20');?>">工会活动</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">心理健康之家 </a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=21');?>">中心概况</a></li>
                <li><a href="<?php echo U('Lists/index?cid=22');?>">心理园地</a></li>
                <li><a href="<?php echo U('Lists/index?cid=23');?>">心理测试</a></li>
                <li><a href="<?php echo U('Lists/index?cid=24');?>">心理活动</a></li>
                <li><a href="<?php echo U('Lists/index?cid=25');?>">心灵烛台</a></li>
                <li><a href="<?php echo U('Lists/index?cid=26');?>">关于我们</a></li>
            </ul>
        </li>
        <li><a href="<?php echo U('Lists/index?cid=27');?>" style="color: white">下载中心</a>

        </li>
    </ul>
    </div>
</header>



<body>
<br>
<div class="newslist">
    <div class="topdec"><b>新闻动态</b></div>
    <div><middle>
        <?php if(is_array($newstit)): $i = 0; $__LIST__ = $newstit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="display:none;"><?php echo ($b=$vo["id"]); ?></p>
        <a href="<?php echo U('Show/index?id='.$b);?>"><?php echo (substr($vo['title'],0,51)); ?></a><br><?php endforeach; endif; else: echo "" ;endif; ?>
    </middle></div>
</div>
<div class="flowpic">

    <!--<div id="myCarousel" class="carousel slide">
        &lt;!&ndash; 轮播（Carousel）指标 &ndash;&gt;
       &lt;!&ndash; <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"
                class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>&ndash;&gt;
        &lt;!&ndash; 轮播（Carousel）项目 &ndash;&gt;
        <div class="carousel-inner">
            <div class="item active">
                <img src="/web/marx/Public/images/toppic_1.png" width="300px" height="200px" alt="First slide" class="topimg">
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/toppic_1.png" width="300px" height="200px" alt="Second slide" class="topimg">
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/toppic_2.png" width="300px" height="200px" alt="Third slide" class="topimg">
            </div>
        </div>
        &lt;!&ndash; 轮播（Carousel）导航 &ndash;&gt;
        <a class="carousel-control left" href="#myCarousel"
           data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel"
           data-slide="next">&rsaquo;</a>
    </div>-->
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/web/marx/Public/images/toppic_1.png" alt="First slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/toppic_1.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/toppic_1.png" alt="Third slide">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <a class="carousel-control left" href="#myCarousel"
           data-slide="prev">&lsaquo;
        </a>
        <a class="carousel-control right" href="#myCarousel"
           data-slide="next">&rsaquo;
        </a>
    </div>
</div>
<div class="notice">
    <div class="topdec"><b>公告栏</b></div>
    <div><middle>
        <?php if(is_array($noticetit)): $i = 0; $__LIST__ = $noticetit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="display:none;"><?php echo ($b=$vo["id"]); ?></p>
            <a href="<?php echo U('Show/index?id='.$b);?>"><?php echo (substr($vo['title'],0,51)); ?></a><br><?php endforeach; endif; else: echo "" ;endif; ?>
    </middle></div>
    </volist>
</div>
<div class="piclinks">

</div>
<div class="activities">

</div>
<div class="links">
    <div class="topdec"><b>教学资源</b></div>
    <img src="/web/marx/Public/images/links/friendlink1.png" width="300px" height="40px" alt="">
    <img src="/web/marx/Public/images/links/friendlink2.png" width="300px" height="40px" alt="">
    <img src="/web/marx/Public/images/links/friendlink3.png" width="300px" height="40px" alt="">
    <img src="/web/marx/Public/images/links/friendlink4.png" width="300px" height="40px" alt="">
    <img src="/web/marx/Public/images/links/friendlink5.png" width="300px" height="40px" alt="">
</div>
</body>
<footer class="bottom container" style="text-align:center">
    <a href="">沈航官网</a> |
    <a href="">数字沈航</a> |
    <a href="">沈航图书馆</a><br><br>
    版权所有 沈阳航空航天大学马克思主义学院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;辽宁省沈阳市沈北新区道义南大街37号  联系电话：89724408
    <br>&nbsp;
</footer>