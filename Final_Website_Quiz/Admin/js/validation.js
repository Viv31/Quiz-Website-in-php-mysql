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
function QueValidation(){

var question =$('#question').val();
var answer1 =$('#ans1').val();
var answer2 =$('#ans2').val();
var answer3 =$('#ans3').val();
var answer4 =$('#ans4').val();
var answer =$('#ans').val();


if(question==""){

$('#add_quechk').show();

$('#add_quechk').css('color','#CC0000');
$('#add_quechk').html('Question can not be empty');
$('#question').focus();
$('#question').addClass();
setTimeout("$('#add_quechk').fadeOut();",3000);
return false;
}



if(answer1==""){

$('#add_ans1chk').show();

$('#add_ans1chk').css('color','#CC0000');
$('#add_ans1chk').html('First answer can not be empty');
$('#ans1').focus();
$('#ans1').addClass();
setTimeout("$('#add_ans1chk').fadeOut();",3000);
return false;
}

if(answer2==""){

$('#add_ans2chk').show();

$('#add_ans2chk').css('color','#CC0000');
$('#add_ans2chk').html('Second answer can not be empty');
$('#ans2').focus();
$('#ans2').addClass();
setTimeout("$('#add_ans2chk').fadeOut();",3000);
return false;
}

if(answer3==""){

$('#add_ans3chk').show();

$('#add_ans3chk').css('color','#CC0000');
$('#add_ans3chk').html('Third answer can not be empty');
$('#ans3').focus();
$('#ans3').addClass();
setTimeout("$('#add_ans3chk').fadeOut();",3000);
return false;
}

if(answer4==""){

$('#add_ans4chk').show();

$('#add_ans4chk').css('color','#CC0000');
$('#add_ans4chk').html('Fourth answer can not be empty');
$('#ans4').focus();
$('#ans4').addClass();
setTimeout("$('#add_ans4chk').fadeOut();",3000);
return false;
}

if(answer==""){

$('#add_anschk').show();

$('#add_anschk').css('color','#CC0000');
$('#add_anschk').html('Right answer can not be empty');
$('#ans').focus();
$('#ans').addClass();
setTimeout("$('#add_anschk').fadeOut();",3000);
return false;
}



}
