$(document).ready(function(){
		$('input').focus(function(){
			$(this).css("outline-color","blue");
		});
		
		$('.button').click(function(){
			$('body').css('background-color','blue');
		});
		
		//$('body').css('background-color','green');
});
