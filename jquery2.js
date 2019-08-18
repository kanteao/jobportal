$(document).ready(function(){
	$('#home').show();
	$('#menu2').hide();
	$('#home_next').click(function(){
		$('#home').hide();
		$('#menu2').show();
	});
})