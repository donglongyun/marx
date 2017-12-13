$(function(){ 	
  		//页面加载完后循环判断为OFF的按钮
  		$(".span").each(function(){
  			if($(this).text() == 'OFF'){ 
  				//alert($(this).text());
				$(this).css({'left':'25px','color':'#666'});
				$(this).parents('.out').css({'background':'#eee','box-shadow':'-1px 1px  5px 1px #bbb inset'});
	  			$(this).parents('.out').find('.in').css('right','38px');
  			}
  		});
  		
  		//点击后判断
  		$('.in').click(function(){ 
  			//alert('aaa');
  			var spantext = $(this).parents('.out').find('.span').text();
  			if(spantext == 'ON'){ 
  				$(this).css({'right':'38px'});
  				$(this).parents('.out').css({'background':'#eee','box-shadow':'-1px 1px  5px 1px #bbb inset'});
  				var span = $(this).parents('.out').find('.span');
  				span.css({'left':'25px','color':'#666'});
  				span.text('OFF');
  				var text = 0;
  				var id = span.attr('id');
  				Ajax(text,id,table);
  			}else{  
  				$(this).css({'right':'-1px'});
  				$(this).parents('.out').css({'background':'#5E9DED','box-shadow':'1px 1px  3px 1px #3F82D1 inset'});
  				var span = $(this).parents('.out').find('.span');
  				span.css({'left':'0px','color':'#fff'});
  				span.text('ON');
  				var text = 1;
  				var id = span.attr('id');
  				Ajax(text,id,table);
  			}
  		});
  		

  });
function Ajax(text,id,mytable){ 
	//var url = '__URL__/userStatus';
	$.post(url,{status:text,uid:id,table:mytable},function(data){ 
		if(data.status){ 
			if(data.msg == 1){ 
				alert('开启成功');
			}else{ 
				alert('关闭成功');
			}
		}else{ 
			alert('修改失败');
		}
	},'json');
}