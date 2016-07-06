$(document).ready(function (argument) {

	$('#ajaxForm').change(function() {

		var URL = $('#ajaxForm').attr('action'); 
		var METHOD = $('#ajaxForm').attr('method'); 
		var Loading = "<div class='loading'><i class='fa fa-refresh fa-spin'></i></div>";

		$.ajax({
			url: URL,
			method: METHOD,
			data:new FormData(this),
			contentType:false,
			processData:false,
			beforeSend:function(){
				$('.display').append(Loading);
			},
			success:function(output){
				$('.loading').remove();
				$('.display').append('<img class="imgAjax" src="' + output + '" />');
				if ($('.imgAjax').length > 1) {
					$('#ajaxForm').remove(); 
					$('.txtCH').text('Thank you')
				}
			}

		});

	});
});