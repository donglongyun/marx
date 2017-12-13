$(function(){ 
	  
	  	$('input[level=1]').click(function(){ 
			var inputs = $(this).parents('.app').find('input');
			$(this).attr('checked') ? inputs.attr('checked','checked') : inputs.removeAttr('checked');
		});
	  	$('input[level=2]').click(function(){ 
	  		var input1 = $(this).parents('.app').find('input[level=1]');
	  		input1.attr('checked','checked');
	  		var inputs = $(this).parents('dl').find('input');
	  		$(this).attr("checked") ? inputs.attr("checked","checked") : inputs.removeAttr("checked");
	  	});
	  	$('input[level=3]').click(function(){ 
	  		
	  		var input1 = $(this).parents('.app').find('input[level=1]');
	  		var input2 = $(this).parents('dl').find('input[level=2]');
	  		input1.attr('checked','checked');
	  		input2.attr('checked','checked');
	  		
	  	});
	  	
});