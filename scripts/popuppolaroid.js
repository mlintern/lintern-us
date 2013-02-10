$(document).ready(function() {
	$('.little-polaroid').click(function() {
		console.log('little-polaroid click')
		
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
			
		// Add the mask to body
		$('body').append(PolaroidDiv);

		return false;
	});

	// When clicking on the button close or the mask layer the popup closed
	//$('#mask').live('click', function() { 
	$('.big-polaroid').live("click touchstart", function(){
		$('.big-polaroid').fadeOut(300 , function() {
			//$('.big-polaroid').remove(); 
			  this.remove();
		});
		return false;
	});

	
});
