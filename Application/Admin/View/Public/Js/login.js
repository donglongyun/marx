$(function(){
	$("#myform").submit(function(){
		//验证用户名
		if($("input[name='username']").val().trim() == ''){ 
			return false;
			alert('用户名不能为空');
			
		}else if($("input[name='password']").val().trim() == ''){ 
			return false;
			alert('密码不能为空');
			
		}else if($("input[name='code']").val().trim() == ''){ 
			return false;
			alert('验证码不能为空');
			
		}	

	});

});