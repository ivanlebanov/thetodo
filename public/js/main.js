	$('label').click(function() {
	  
	  // find the first span which is our circle/bubble
	  var el = $(this).children('span:first-child');
	  
	  // add the bubble class (we do this so it doesnt show on page load)
	  el.addClass('circle');
	  
	  // clone it
	  var newone = el.clone(true);  
	  
	  // add the cloned version before our original
	  el.before(newone);  
	  // remove the original so that it is ready to run on next click
	  $("." + el.attr("class") + ":last").remove();
	}); 

	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	$('.form-group :checkbox').change(function(e) {
		var data = false;
		var id = $(this).attr('id');
		if($(this).is(':checked')){
			data = true;
		}
		$.ajax({
		    url: '/form-data/',
		    type: 'POST',
		    data: {_token: CSRF_TOKEN, data: data, id: id},
		    dataType: 'JSON',
		    success: function (data) {
		        console.log(data);
		    }
		});	
	});