<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!--引入jQuery文件-->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/web/marx/Public/css/main.css">
    <link rel="javascript" href="/web/marx/Public/js/main.js">
    <link rel="stylesheet" href="/web/marx/Public/css/ft-carousel.css">
    <script type="text/javascript" src="/web/marx/Public/js/ft-carousel.min.js"></script>
    <title>马克思主义学院</title>
</head>
<body><div>
    <img src="/web/marx/Public/images/head2.png" class="topimg">
</div>

<!--<div class="container"style="margin-top: -29px">
    <div class="btn-group btn-group-sm col-md-offset-3" role="group">
        <button type="button" class="btn btn-default"><a href="<?php echo U('Index/index');?>">首页</a></button>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-default"><a href="<?php echo U('Lists/index?cid=27');?>">下载中心</a></button>
    </div>
</div>
<script>

    $('.mousedown').mouseover(function() {

        $(this).addClass('open');    }).mouseout(function() {        $(this).removeClass('open');    });

</script>-->
<div class="toplink">
        <ul id="nav" style="border-radius: 10px 10px 0px 0px">
        <li><a href="<?php echo U('Index/index');?>" style="color: white;font-weight: bold;">首页</a>
        </li>
        <li><a href="#" style="color: white;font-weight: bold;">学院概况</a>
            <ul>
                <li><a href="<?php echo U('Show/showdet?cid=3');?>">学院简介</a></li>
                <li><a href="<?php echo U('Lists/index?cid=4');?>">机构设置</a></li>
                <li><a href="<?php echo U('Lists/index?cid=5');?>">师资队伍</a></li>
                <li><a href="<?php echo U('Lists/index?cid=6');?>">规章制度</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white;font-weight: bold;">教学工作</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=7');?>">课程建设</a></li>
                <li><a href="<?php echo U('Lists/index?cid=8');?>">教学改革</a></li>
                <li><a href="<?php echo U('Lists/index?cid=9');?>">教学管理</a></li>
                <li><a href="<?php echo U('Lists/index?cid=10');?>">精品课程</a></li>
                <li><a href="<?php echo U('Lists/index?cid=11');?>">实践教学</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white;font-weight: bold;">科学研究</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=12');?>">学术动态</a></li>
                <li><a href="<?php echo U('Lists/index?cid=13');?>">科研项目</a></li>
                <li><a href="<?php echo U('Lists/index?cid=14');?>">科研成果</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white;font-weight: bold;">学科建设</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=15');?>">学科现状</a></li>
                <li><a href="<?php echo U('Lists/index?cid=16');?>">导师简介</a></li>
                <li><a href="<?php echo U('Lists/index?cid=17');?>">研究生培养</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white;font-weight: bold;">党群工作</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=18');?>">党群动态</a></li>
                <li><a href="<?php echo U('Lists/index?cid=19');?>">理论学习</a></li>
                <li><a href="<?php echo U('Lists/index?cid=20');?>">工会活动</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white;font-weight: bold;">心理健康之家 </a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=21');?>">中心概况</a></li>
                <li><a href="<?php echo U('Lists/index?cid=22');?>">心理园地</a></li>
                <li><a href="<?php echo U('Lists/index?cid=23');?>">心理测试</a></li>
                <li><a href="<?php echo U('Lists/index?cid=24');?>">心理活动</a></li>
                <li><a href="<?php echo U('Lists/index?cid=25');?>">心灵烛台</a></li>
                <li><a href="<?php echo U('Lists/index?cid=26');?>">关于我们</a></li>
            </ul>
        </li>
        <li><a href="<?php echo U('Lists/index?cid=27');?>" style="color: white;font-weight: bold;">下载中心</a>

        </li>
    </ul>
    </div>




<br>
<div class="container row">
<div class="newslist">
    <!--<div class="topdec"><a href="<?php echo U('Lists/index?cid=1');?>" style="color: white"><b>新闻动态</b>>>></a></div>
    <div><middle>
        <?php if(is_array($newstit)): $i = 0; $__LIST__ = $newstit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="display:none;"><?php echo ($b=$vo["id"]); ?></p>
        <a href="<?php echo U('Show/index?id='.$b);?>" ><?php echo ($vo['title']); ?></a><br><br><?php endforeach; endif; else: echo "" ;endif; ?>
    </middle></div>-->
    <div class="topdec" ><a href="<?php echo U('Lists/index?cid=1');?>" style="color: white"><b>新闻动态</b>>>></a></div>
    <marquee behavior="scroll" direction="up" scrollamount="4.5" onmouseover=this.stop() onmouseout=this.start()><middle>
        <?php if(is_array($newstit)): $i = 0; $__LIST__ = $newstit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="display:none;"><?php echo ($b=$vo["id"]); ?></p>
            <a href="<?php echo U('Show/index?id='.$b);?>" ><b><?php echo ($vo['title']); ?></b></a><br><br><?php endforeach; endif; else: echo "" ;endif; ?>
    </middle></marquee>
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- 轮播（Carousel）指标 -->
        <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>-->
        <!-- 轮播（Carousel）项目 -->
        <div style="position: absolute;left: 40%;top: -26px;z-index: 2;color: #2F4F4F;font-size: 17px;font-weight: bold;">学生活动</div>
        <div class="carousel-inner">
            
            <div class="item active">
                <img src="/web/marx/Public/images/1.png" alt="First slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/2.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/3.png" alt="Third slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/4.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/5.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/6.png" alt="Second slide">
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
    <div class="topdec" ><a href="<?php echo U('Lists/index?cid=2');?>" style="color: white"><b>公告栏</b>>>></a></div>
    <marquee behavior="scroll" direction="up" scrollamount="4" onmouseover=this.stop() onmouseout=this.start()><middle>
        <?php if(is_array($noticetit)): $i = 0; $__LIST__ = $noticetit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="display:none;"><?php echo ($b=$vo["id"]); ?></p>
            <a href="<?php echo U('Show/index?id='.$b);?>"><b><?php echo ($vo['title']); ?></b></a><br><br><?php endforeach; endif; else: echo "" ;endif; ?>
    </middle></marquee>
</div>
</div>
<div class="container">
<div class="piclinks">
    <a href="http://sauqjj.com/"> <img src="/web/marx/Public/images/rightdown/1-1.gif" alt="特色情景剧" class="img-responsive"></a>
    <a href="<?php echo U('Show/showdet?cid=3');?>"> <img src="/web/marx/Public/images/rightdown/2-1.gif" alt="" class="img-responsive"></a>
    <a href="<?php echo U('Lists/index?cid=4');?>"> <img src="/web/marx/Public/images/rightdown/3-1.gif" alt="" class="img-responsive"></a>
</div>
<div class="activities">
    <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- 轮播（Carousel）指标 -->
        <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>-->
        <!-- 轮播（Carousel）项目 -->
        <div style="position: absolute;left: 40%;top: -26px;z-index: 2;color: #2F4F4F;font-size: 17px;font-weight: bolder;">学院风采</div>
        <div class="carousel-inner" style="white-space:nowrap;">
            
            <div class="item active">
                <img src="/web/marx/Public/images/xia/1.png" alt="First slide">
                <center><span class="jieshao" style="text-align: center"></span></center>
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/xia/2.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/xia/3.png" alt="Third slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/xia/4.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/xia/5.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="/web/marx/Public/images/xia/6.png" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <a class="carousel-control left" href="#myCarousel1"
           data-slide="prev">&lsaquo;
        </a>
        <a class="carousel-control right" href="#myCarousel1"
           data-slide="next">&rsaquo;
        </a>
    </div>
</div>
<div class="links">
    <div class="topdec"><b>教学资源</b></div>
    <a href="http://www.moe.edu.cn/"><img src="/web/marx/Public/images/links/friendlink1-1.png" class="img-responsive"></a>
    <a href="https://www.sinoss.net/index.html"> <img src="/web/marx/Public/images/links/friendlink2-1.png" class="img-responsive"></a>
    <a href="http://www.npopss-cn.gov.cn/"><img src="/web/marx/Public/images/links/friendlink3-1.png" class="img-responsive"></a>
    <a href="http://www.stuln.com/"><img src="/web/marx/Public/images/links/friendlink4-1.png" class="img-responsive"></a>
    <a href="http://www.upln.cn/"><img src="/web/marx/Public/images/links/friendlink5-1.png" class="img-responsive"></a>

</div>
</div>
</body>
<footer class="indexfoot" >
    <a href="http://www.sau.edu.cn">沈航官网</a> |
    <a href="http://i.sau.edu.cn">数字沈航</a> |
    <a href="http://lib.sau.edu.cn">沈航图书馆</a><br>
    <a href="mailto:316433179@qq.com" style="color: #232323; text-decoration: none;">Power by dlink </a><br>
    版权所有 沈阳航空航天大学马克思主义学院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;辽宁省沈阳市沈北新区道义南大街37号  联系电话：89724408
    <br>&nbsp;
</footer>