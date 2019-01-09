function validation(){

var username=$('#username').val();
var pass=$('#password').val();

if(username==""){

		$('#emailChk').show();
		$('#emailChk').css('color','#CC0000');
		$('#emailChk').html('Please Enter Your Email');
		$('#username').focus();
		$('#username').addClass('error');
		setTimeout("$('#emailChk').fadeOut();",3000);
		return false;
	}

	if(pass==""){
		$('#PassChk').show();
		$('#PassChk').css('color','#CC0000');
		$('#PassChk').html('Please Enter your Password');
		$('#password').focus();
		$('#password').addClass('error');
		setTimeout("$('#PassChk').fadeOut();",3000);
		return false;

	}



}

function catValidation(){
var catName=$('#category_name').val();

if(catName==""){

		$('#Catchk').show();
		$('#Catchk').css('color','#CC0000');
		$('#Catchk').html('Category can not be empty');
		$('#category_name').focus();
		$('#category_name').addClass('error');
		setTimeout("$('#Catchk').fadeOut();",3000);
		return false;


}


}
var category = $('#category_id').val();

if(category==""){
$('#categoryChk').show();
		$('#categoryChk').css('color','#CC0000');
		$('#categoryChk').html('Category can not be empty');
		$('#category_id').focus();
		$('#category_id').addClass('error');
		setTimeout("$('#categoryChk').fadeOut();",3000);
		return false;


}


