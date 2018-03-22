function menuFix() {
    var sfEls = document.getElementById("nav").getElementsByTagName("li");
}
window.onload=menuFix;

/*
window.onload = function(){

    var images = document.getElementsByTagName('img');
    var pos = 0;
    var len = images.length;

    setInterval(function(){

        images[pos].style.display = 'none';
        pos = ++pos == len ? 0 : pos;
        images[pos].style.display = 'inline';

    },1000);

};*/
/*$(function(){
    // 初始化轮播
    $(".start-slide").click(function(){
        $("#myCarousel").carousel('cycle');
    });
    // 停止轮播
    $(".pause-slide").click(function(){
        $("#myCarousel").carousel('pause');
    });
    // 循环轮播到上一个项目
    $(".prev-slide").click(function(){
        $("#myCarousel").carousel('prev');
    });
    // 循环轮播到下一个项目
    $(".next-slide").click(function(){
        $("#myCarousel").carousel('next');
    });
    // 循环轮播到某个特定的帧
    $(".slide-one").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".slide-two").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".slide-three").click(function(){
        $("#myCarousel").carousel(2);
    });
});*/
$(function(){
    function footerPosition(){
        $("footer").removeClass("fixed-bottom");
        var contentHeight = document.body.scrollHeight,//网页正文全文高度
            winHeight = window.innerHeight;//可视窗口高度，不包括浏览器顶部工具栏
        if(!(contentHeight > winHeight)){
            //当网页正文高度小于可视窗口高度时，为footer添加类fixed-bottom
            $("footer").addClass("fixed-bottom");
        }
    }
    footerPosition();
    $(window).resize(footerPosition);
});
