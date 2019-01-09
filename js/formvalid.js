function checkUser(){

var firstname=$('#fname').val();
var lastname=$('#lname').val();
var email=$('#email').val();
var password=$('#pass').val();
var cpassword=$('#cpass').val();
var upload_img=$('#file').val();


 
  if (firstname=="") {
$('#firstnamechk').show();
$('#firstnamechk').css('color', '#CC0000');
$('#firstnamechk').html('Please enter firstname.');
$('#fname').focus();
$('#fname').addClass('error');
setTimeout("$('#firstnamechk').fadeOut(); ", 3000);
return false;
}
 
 else if (lastname=="") {
$('#lastnamechk').show();
$('#lastnamechk').css('color', '#CC0000');
$('#lastnamechk').html('Please enter lastname.');
$('#lname').focus();
$('#lname').addClass('error');
setTimeout("$('#lastnamechk').fadeOut(); ", 3000);
return false;
}

else if(email==""){
$('#chkemail').show();
$('#chkemail').css('color','#CC0000');
$('#chkemail').html('please enter email');
$('#email')	.focus();
$('#email').addClass('error');
setTimeout("$('#chkemail').fadeOut();",3000);
return false;
	
}
else if(password==""){
	
	$('#chkpwd').show();
	$('#chkpwd').css('color','#CC0000');
	$('#chkpwd').html('please enter your password');
	$('#pass').focus();
	$('#pass').addClass('error');
	setTimeout("$('#chkpwd').fadeOut();",3000);
	return false;
	
}
else if(cpassword==""){
	
	$('#cpwd').show();
	$('#cpwd').css('color','#CC0000');
	$('#cpwd').html('please reenter your password');
	$('#cpass').focus();
	$('#cpass').addClass('error');
	setTimeout("$('#cpwd').fadeOut();",3000);
	return false;
}
 
 else if(cpassword!=password){
	
	$('#cpwd').show();
	$('#cpwd').css('color','#CC0000');
	$('#cpwd').html('password not matched');
	$('#cpass').focus();
	$('#cpass').addClass('error');
	setTimeout("$('#cpwd').fadeOut();",3000);
	return false;
}

else if(upload_img==""){
	
	$('#uploadIMG').show();
	$('#uploadIMG').css('color','#CC0000');
	$('#uploadIMG').html('please Upload Image');
	$('#file').focus();
	$('#file').addClass('error');
	setTimeout("$('#uploadIMG').fadeOut();",3000);
	return false;
}
 
 
 
 
else {
$('form#register').submit();
}
}


function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
