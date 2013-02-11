$(document).ready(function() {
	$('.little-polaroid').click(function() {
		
		currentID = $(this).attr("id");
		//console.log(currentID);
		$(this).css({'visibility' : 'hidden'});
		
		//Getting the variable's value from a link 
		var ImageSource = $(this).find("img").attr('src');
		
		//Set the center alignment padding + border see css style
		var popMargTop = (550 + 24) / 2; 
		var popMargLeft = (500 + 24) / 2; 

		var PolaroidDiv = $('<div>')
					.attr('class','big-polaroid')
					.attr('id',currentID)
					.css({ 
						'margin-top' : -popMargTop,
						'margin-left' : -popMargLeft
					})
					.append(
					$('<div>')
						.attr('class','exit'))
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

	$('.exit').live("click touchstart", function(){
	currentID = $(this).parent().attr("id");
	$("#"+currentID).css({'visibility':'visible'});
	$(this).parent().remove();
	});
	
});
