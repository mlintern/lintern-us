$(document).ready(function() {
	$('.little-polaroid').click(function() {
		console.log($(this).attr("id"));
		
		//Getting the variable's value from a link 
		var ImageSource = $(this).find("img").attr('src');
		
		//Set the center alignment padding + border see css style
		var popMargTop = (550 + 24) / 2; 
		var popMargLeft = (500 + 24) / 2; 

		var PolaroidDiv = $('<div>')
					.attr('class','big-polaroid')
					.css({ 
						'margin-top' : -popMargTop,
						'margin-left' : -popMargLeft
					})
					.append(
					$('<div>')
						.attr('class','inner')
						.append(
						$('<img>')
							.attr('class','large')
							.attr('src', ImageSource )
				));

		$('body').append(PolaroidDiv);
	});

	$('.big-polaroid').live("click touchstart", function(){
		this.remove();
	});
	
});
