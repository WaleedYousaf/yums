<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm1-traditional.dtd">
<html xmIns="http://www.w3.org/1999/xhtmI">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<title>Sign Up</title>
<link href="homecss.css" rel="stylesheet">

<style type="text/css">
	.signuptable{
		border: 1px;
		background-color: grey;
		padding: 10px
    	
	}
	#submitbtn{
		min-width: 421px
	}	
</style>


</head>
<body>

<?php
  include_once("header.php");
?>




<form id="contact_form" class="form-horizontal" onsubmit="return validate()" method="post" action="customer_db.php">
<fieldset>

<!-- Form Name -->
<legend align="center"><h1>Sign Up</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname"></label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
  <span id='messageforname'></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname"></label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
  <span id='messageforlname'></span> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ema"></label>  
  <div class="col-md-4">
  <input id="ema" name="ema" type="email" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phno"></label>  
  <div class="col-md-4">
  <input id="phno" name="phno" type="text" placeholder="Mobile No: 03111111111" class="form-control input-md" required="">
  <span id='phmessage'></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr"></label>  
  <div class="col-md-4">
  <input id="addr" name="addr" type="text" placeholder="Address" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr"></label>  
  <div class="col-md-4">
  <!-- <input id="addr" name="addr" type="text" placeholder="Address" class="form-control input-md"> -->
    <select id="city" name="city" class="form-control input-md">
      <option value="islamabad">Islamabad</option>
      <option value="lahore">Lahore</option>
      <option value="karachi">Karachi</option>
    </select>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pas"></label>
  <div class="col-md-4">
    <input id="pas" name="pas" type="password" placeholder="Enter Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="repas"></label>
  <div class="col-md-4">
    <input id="repas" name="repas" type="password" placeholder="Retype Password" class="form-control input-md" required="">
    <span id='message'></span>
    
  </div>
</div>

<!-- Button -->
<div class="form-group"  align="center" >
  <label class="col-md-4 control-label" for="submitbtn"></label>
  <div class="col-md-4">
    <input type="submit" id="submitbtn" name="submitbtn" class="btn btn-primary" value="Register"">
  </div>
</div>
</fieldset>
</form>

<script type="text/javascript">
	
		
		//alert("value of fname is "+valueoffname); 
		
		$('#fname').on('keyup', function () {
		  var valueoffname= $('#fname').val();
		  //alert("value of fname is "+valueoffname);
		  if (valueoffname.length >= 3 || valueoffname.length == 0) {
		    $('#messageforname').html('').css('color', 'green');
		     

		  } else {
		    $('#messageforname').html('Length should be greater than 2*').css('color', 'red');

		    
		}
		});

		$('#lname').on('keyup', function () {
		  var valueoflname= $('#lname').val();
		  //alert("value of fname is "+valueoffname);
		  if (valueoflname.length >= 3 || valueoflname.length == 0) {
		    $('#messageforlname').html('').css('color', 'green');
		     

		  } else {
		    $('#messageforlname').html('Length should be greater than 2*').css('color', 'red');

		    
		}
		});



		$('#repas').on('keyup', function () {
		  if ($('#pas').val() == $('#repas').val()) {
		    $('#message').html('Passwords Matching').css('color', 'green');
		     

		  } else {
		    $('#message').html('Passwords Not Matching').css('color', 'red');

		    
		}
		});
	

		$('#phno').on('keyup', function () {
		  if($.isNumeric($('#phno').val()) || $('#phno').val()==0) 
		  {
		     $('#phmessage').html('').css('color', 'green');
		   	if ($('#phno').val().length>=11 || $('#phno').val()==0) 
		   	{
		   		$('#phmessage').html('').css('color', 'green');
		   	}else
		   	{
		   		$('#phmessage').html('Length must be greater than 10').css('color', 'red');
		   	}

		   } else{ 
		    $('#phmessage').html('Alphabets cant be used').css('color', 'red'); 
		}
		});








function validate(){  

  
var pass = document.getElementById("pas").value;
var repass = document.getElementById("repas").value;
var phone = document.getElementById("phno").value;
	if (checkFNameLength(true)) 
	{
		if (checkLNameLength(true)) 
		{
			if (isNumeric(phone)) 
			{	
				//$('#phmessage').html('').css('color', 'red');
				if (pasChk(true)) 
				{	
					return true;
				}
				else
				{
					//alert("Password dosent match");
					return false;
				}
			}else
			{
				//alert("Use Numbers only");
				//$('#phmessage').html('Use Numbers Only').css('color', 'red');
				phno.focus();
				return false;
			}
		}else
		{
			lname.focus();
			return false;
		}
	}else
	{
		fname.focus();
		return false;
	}	
return false;
}


function checkFNameLength(){
		  var valueoffname= $('#fname').val();
		  //alert("value of fname is "+valueoffname);
		  if (valueoffname.length >= 3) {
		    //$('#messageforname').html('').css('color', 'green');
		    return true;
		     

		  } else {
		    $('#messageforname').html('Length should be greater than 2*').css('color', 'red');
		    fname.focus();
		    return false;		    
		}
		
}

function checkLNameLength(){
		  var valueoffname= $('#lname').val();
		  //alert("value of fname is "+valueoffname);
		  if (valueoffname.length >= 3) {
		    //$('#messageforname').html('').css('color', 'green');
		    return true;
		     

		  } else {
		    $('#messageforlname').html('Length should be greater than 2*').css('color', 'red');
		    lname.focus();
		    return false;		    
		}
		
}



function pasChk(){
var pass = document.getElementById("pas").value;
var repass = document.getElementById("repas").value;

	if(repass == pass){  
	//alert("password are same!");  

	return true;  
	}  
	else{  
	//alert("password must be same!");
	$('#message').html('Password Not Matching').css('color', 'red');
	pas.focus();  
	return false;  
	}  
}  



function isNumeric(phone) {
	  
	  	
		
		if ($('#phno').val().length>=11) 
		   	{
		   		//$('#phmessage').html('').css('color', 'green');
		   	}else
		   	{
		   		$('#phmessage').html('Length must be greater than 10').css('color', 'red');
		   		return false;
		   	}
return !isNaN(parseFloat(phone)) && isFinite(phone);
}

</script>

<br>
<br>


<?php
  include_once("footer.php");
?>










</body>
</html>