
 /* 
  $(document).ready(function(){
	$('#email').blur(function(){


    var email = $(this).val();
    $.ajax({

    	url:"chk.php",//caling file where our code is checking from database 
    	method:"POST",
    	data:{email:email},
    	dataType:"text",
    	success:function(html)
    	{
        if(html==true){
          $('#msg').html("<p style='color:red;'>email is already exixst");
         // $('#email').val('');
          $('#email').focus();
          $( "#pwd" ).prop( "disabled", true );
           $( "#conf_pwd" ).prop( "disabled", true );
                  

           document.getElementById("email").onkeypress = function()
            {
                myFunction()
            };

             function myFunction() 
             {
                        document.getElementById("pwd").onkeypress = function()
                    {
                        myFunction2()
                        if($('#email').val(''))
                        {
                            $( "#pwd" ).prop( "disabled", true );
                            $( "#conf_pwd" ).prop( "disabled", true );
                            
                        }


                    };



                    $('#msg').html("");


                    $( "#pwd" ).prop( "disabled", false );
                   $( "#conf_pwd" ).prop( "disabled", false );
   
                }

                  
           }



        else{

           $( "#pwd" ).prop( "disabled", false );
           $( "#conf_pwd" ).prop( "disabled", false );
           
        }



    		
    	}



    });

	});
	


});
 */

/* function for showing password to user in password field  */
function ShowPass() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

 

/* function for showing password to user in confirm  password field  */
function ShowPassconf() {
    var x = document.getElementById("cpass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

//function for showing login password

function ShowPasslog() {
    var x = document.getElementById("logpwd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}







/* this function is used for checking e-mail availabilty on key press by user  */
 function checkemail()
{
 var email=document.getElementById( "email" ).value;
    
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   email:email,
  },
  success: function (response) {
   $( '#chkemail' ).html(response);
   if(response=="OK")   
   {
    return true;    
   }
   else
   {
    return false;   
   }
  }
  });
 }
 else
 {
  $( '#chkemail' ).html("");
  return false;
 }
}

/*
function checkConfPass(){

var cpass=document.getElementById( "cpass" ).value;
    
 if(cpass)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   cpass:cpass,
  },
  success: function (response) {
   $( '#cpwd' ).html(response);
   if(response=="OK")   
   {
    return true;    
   }
   else
   {
    return false;   
   }
  }
  });
 }
 else
 {
  $( '#cpwd' ).html("");
  return false;
 }


}*/
