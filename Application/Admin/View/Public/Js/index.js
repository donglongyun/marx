
	window.onload = function(){ 
    		//初始化页面高度
    		var clientW = document.documentElement.clientWidth;
			var clientH = document.documentElement.clientHeight;
			var oCon = document.getElementById('content');
			var oBo = document.getElementById('body');
			oCon.style.height = clientH - 90+'px';
			oBo.style.height = clientH +'px';

			//菜单栏弹框
    		/*$('dt').click(function(){ 
    			var div = $(this).parents('dl').find('div');
    			if(div.css('display') == 'none'){ 
    				$(this).find('span').removeClass('icon-menu3');
    				$(this).find('span').addClass('icon-menu4');
    				div.css('display','block');
    			}else{ 
    				$(this).find('span').removeClass('icon-menu4');
    				$(this).find('span').addClass('icon-menu3');
    				div.css('display','none');
    			}
    		});*/
            //菜单栏弹框
            $('dt').click(function(){ 
                var div = $(this).parents('dl').find('div'); 
                var flag = $("input[name=flag]");
                if(div.css('display')=='block'){
                    flag.val('block');
                }else{
                    flag.val('none');
                }
                $('dl').each(function(){
                    $(this).find('div').css('display','none');
                    $(this).find('dt').find('span').removeClass('icon-menu4');
                    $(this).find('dt').find('span').addClass('icon-menu3');
                });
                if(flag.val() == 'none'){
                    div.css('display','block');
                    $(this).find('span').removeClass('icon-menu3');
                    $(this).find('span').addClass('icon-menu4');
                }
            });
    		$('dd').click(function(){ 
    			$('dd').css('background','');
    			$(this).css('background','#fff');
    		});
    	}

		window.onresize=function(){ 

			var clientW = document.documentElement.clientWidth;
			var clientH = document.documentElement.clientHeight;
			var oCon = document.getElementById('content');
			var oBo = document.getElementById('body');
			    		
			oCon.style.height = clientH - 90+'px';
			oBo.style.height = clientH +'px';
    	}