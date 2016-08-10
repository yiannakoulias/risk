$('form.ajax').on('submit', function(){
	
	var that =  $(this), //reference the current object (the form)
		url = that.attr('action'), //form attribute
		type = that.attr('method'), //form method
		data = {};
	
	that.find('[]').each(function(index,value){
		var that = $(this),
			name = that.attr('name'),
			value  = that.val();
		
		data[name]=value;

	});
	
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response){
			
		};
	})
	
	return false;
});