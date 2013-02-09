$(document).ready(function() {
	$('a.popup-link').click(function() {

		//Getting the variable's value from a link 
		var popupBox = $(this).attr('href');

		//Fade in the Popup
		$(popupBox).fadeIn(300);

		//Set the center alignment padding + border see css style
		var popMargTop = ($(popupBox).height() + 24) / 2; 
		var popMargLeft = ($(popupBox).width() + 24) / 2; 

		$(popupBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});

		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);

		return false;
	});

	// When clicking on the button close or the mask layer the popup closed
	//$('#mask').live('click', function() { 
	$('#mask').live("click touchstart", function(){
		$('#mask , #popupform , #score-sheet , #scoreboard , #score-eucher').fadeOut(300 , function() {
			$('#mask').remove();  
		}); 
		return false;
	});
	
});
