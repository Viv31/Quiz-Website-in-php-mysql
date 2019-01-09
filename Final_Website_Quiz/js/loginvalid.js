function logvalid(){
	
	var email=$('#logemail').val();
	var password=$('#logpwd').val();
	
	
	if(email==""){
$('#logemailchk').show();
$('#logemailchk').css('color','#CC0000');
$('#logemailchk').html('please enter email');
$('#email')	.focus();
$('#email').addClass('error');
setTimeout("$('#logemailchk').fadeOut();",3000);
return false;
	
}

else if(password==""){
	
	$('#logpasschk').show();
	$('#logpasschk').css('color','#CC0000');
	$('#logpasschk').html('please enter your password');
	$('#logpwd').focus();
	$('#logpwd').addClass('error');
	setTimeout("$('#logpasschk').fadeOut();",3000);
	return false;
	
}




else {
$('form#login').submit();
}
	
	
}