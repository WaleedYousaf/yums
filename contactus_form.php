<?php 

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
  //echo('Welcome User');
  include_once("header2.php");
}else
{
  //echo('Not loggedin');
  include_once("header.php");
}
?>
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
<title>Contact Us</title>
<link href="css/homecss.css" rel="stylesheet">

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
  //include_once("header.php");
?>


<form class="form-horizontal" method="post" onsubmit="return validate()" action="contactus_db.php">
<fieldset>

<!-- Form Name -->
<legend align="center"><h1>Contact Us</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name"></label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
  <span id='messageforname'></span>
    
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
  <input id="phno" name="phno" type="text" placeholder="Mobile No." class="form-control input-md" >
  <span id='phmessage'></span>    
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr"></label>  
  <div class="col-md-4">
  <input id="addr" name="addr" type="text" placeholder="Address" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subject"></label>  
  <div class="col-md-4">
  <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="msg"></label>  
  <div class="col-md-4">
  <textarea id="msg" name="msg" placeholder="Write details.." style="height:200px;width: 470px"></textarea>
    
  </div>
</div>

<!-- Button -->
<div class="form-group"  align="center" >
  <label class="col-md-4 control-label" for="submitbtn"></label>
  <div class="col-md-4">
    <input type="submit" id="submitbtn" name="submitbtn" class="btn btn-primary" value="Submit">
  </div>
</div>

</fieldset>
</form>

<br>
<br>


<?php
  include_once("footer.php");
?>



<script type="text/javascript">
  
    
    $('#name').on('keyup', function () {
      var valueoffname= $('#name').val();
      //alert("value of fname is "+valueoffname);
      if (valueoffname.length >= 3 || valueoffname.length == 0) {
        $('#messageforname').html('').css('color', 'green');
         

      } else {
        $('#messageforname').html('Length should be greater than 2*').css('color', 'red');

        
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
        $('#phmessage').html('Use Numbers Only!').css('color', 'red'); 
    }
    });






function validate()
{  

  alert("In validate");
//var pass = document.getElementById("pas").value;
//var repass = document.getElementById("repas").value;
var phone = document.getElementById("phno").value;
  
    if (checkNameLength(true)) 
    {
      //alert("In validate n checkNameLength");
      if (isNumeric(phone)) 
      { 
        alert("In validate n isNumeric");
        //$('#phmessage').html('').css('color', 'red');
        return true;
      }else
      {
        //alert("Use Numbers only");
        //$('#phmessage').html('Use Numbers Only').css('color', 'red');
        phno.focus();
        return false;
      }
    }else
    {
      name.focus();
      return false;
    }
return false;
}

function checkNameLength(){
  //alert("In checkNameLength ftn");
      var valueoffname= $('#name').val();
      //alert("value of name is "+valueoffname);
      //alert("value of fname is "+valueoffname);
      if (valueoffname.length >= 3) {
        //$('#messageforname').html('').css('color', 'green');
        return true;
         

      } else {
        $('#messageforname').html('Length should be greater than 2*').css('color', 'red');
        name.focus();
        return false;       
    }
    
}

function isNumeric(phone) {
    
      
    //alert("In isNumeric ftn ");
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




</body>
</html>