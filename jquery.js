$(document).ready(function(){
	$('#home').show();
	$('#menu1').hide();
	$('#menu2').hide();
	$('#home_next').click(function(){
		$('#home').hide();
		$('#menu1').hide();
		$('#menu2').show();
	});
	$('#home_prev').click(function(){
		$('#home').hide();
		$('#menu1').show();
		$('#menu2').hide();
	});
	$('#menu2_next').click(function(){
		$('#home').hide();
		$('#menu1').show();
		$('#menu2').hide();
	});
	$('#menu2_prev').click(function(){
		$('#home').show();
		$('#menu1').hide();
		$('#menu2').hide();
	});
	$('#menu1_first').click(function(){
		$('#home').show();
		$('#menu1').hide();
		$('#menu2').hide();
	});
	$('#menu1_prev').click(function(){
		$('#home').hide();
		$('#menu1').hide();
		$('#menu2').show();
	});
})