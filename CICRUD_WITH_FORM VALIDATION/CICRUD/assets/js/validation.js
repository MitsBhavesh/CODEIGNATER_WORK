function validateForm()
{
	// alert('hii'); return false; 
var error=0;
// var form = document.getElementById('form');
var fname = document.getElementById('fname').value;
var lname = document.getElementById('lname').value;
var password = document.getElementById('password').value;
var conpassword = document.getElementById('conpassword').value;
var email = document.getElementById('email').value;
var phone =	document.getElementById('phone').value;

var address =	document.getElementById('address').value;

var emailval=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i; 
var phoneval=/^\d{10}$/;
var fnameval = /\d+$/g;

	if(fname=="")
    {  
        document.getElementById("error_fname").innerHTML= "Please Enter First Name!! ";  
        error++;
    }
    else
    {  
        document.getElementById("error_fname").innerHTML="";  
   
    }

    if(lname=="")
    {  
        document.getElementById("error_lname").innerHTML= "Please Enter Last Name!! ";  
        error++;
    }
    else
    {  
        document.getElementById("error_lname").innerHTML="";  
   
    }

    if(password=="")
    {  
        document.getElementById("error_password").innerHTML= "Please Enter Email!! ";  
        error++;
    }
    else
    {  
        document.getElementById("error_password").innerHTML="";  
   
    }

    if(conpassword=="")
    {  
        document.getElementById("error_conpassword").innerHTML= "Please Enter Confirm Password!! ";  
        error++;
    }
    else
    {   
        if(password == conpassword)  
		{   
		    // alert("Passwords did not match");  
		    document.getElementById("error_conpassword").innerHTML="";
		} else 
		{  
		    document.getElementById("error_conpassword").innerHTML="Please Enter Confirm Password!!";
		    error++;

		    // alert("Password created successfully");  
		} 
   
    }


    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
    // if(email=="")
    {  
        document.getElementById("error_email").innerHTML= "Please Enter valid Email!! ";  
        error++;
    }
    else
    {  
        document.getElementById("error_email").innerHTML="";  
   
    }

    // if(phone=="")
    // alert(phone);return false;
	var phoneval=/^\d{10}$/;
    if (phoneval==phone)
    {  
        document.getElementById("error_phone").innerHTML= "Please Enter valid Phone!! ";  
        error++;
    }
    else
    {  
        document.getElementById("error_phone").innerHTML="";  
   
    }

    if(address=="")
    {  
        document.getElementById("error_address").innerHTML= "Please Enter Address!! ";  
        error++;
    }
    else
    {  
        document.getElementById("error_address").innerHTML="";  
   
    }


     
  	// return false;
  	if(error != 0)
  	{
    	return false;
  	}
  	else
  	{
    return true;
  	}	
			
// var fnameval = /\d+$/g;	

// var lnameval = /\d+$/g;	


	// if (fname == ""){

 //        window.alert("Please enter your name properly.");
 //        name.focus();
 //        return false;
 //    }

	// if (lname == "" || lnameval.test(lname)) {
	// 	window.alert("Please enter your name properly.");
	// 	lname.focus();
	// 	return false;
 //    }
	// if (password == "") {
	// 	window.alert("Please enter your password");
	// 	password.focus();
	// 	return false;
	// }

	// if (password.length <8){
	// 	window.alert("Password should be atleast 8 character long");
	// 	password.focus();
	// 	return false;
	// }
	// if (email == "" || !emailval.test(email)) {

	// 	window.alert("Please enter a valid e-mail address.");
	// 	email.focus();
	// 	return false;
	// }
	// if (phone == "" || !phoneval.test(phone)) {
	// 	window.alert("Please enter valid phone number.");
	// 	phone.focus();
	// 	return false;
	// }
	// if (address == "") {
 //        window.alert("Please enter your address.");
 //        address.focus();
 //        return false;
 //    }
 //    return true;
}
