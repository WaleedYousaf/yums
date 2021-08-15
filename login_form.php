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
<title>Login Form</title>
<link href="homecss.css" rel="stylesheet">
<link href="login_css.css" rel="stylesheet">

<style type="text/css">
  #inputemail{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

</style>


</head>
<body>

<a class="nav-link" id="login_mainbtn " onclick="document.getElementById('id01').style.display='block'" style=""><span class="glyphicon glyphicon-user"> </span> Login</a>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container inside_modal" style="color: #1a1a1a;width: 100%">
      <label><b>Email</b></label>
      <input id="inputemail" type="email" placeholder="Enter Email" name="ema" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <!-- <button type="submit" id="login_btn1" class="" style="">Login</button> -->
      <input class="btn btn-primary" name="submit" type="submit" value="Login" style="background-color: #2a2a2a;width: 100%">

      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container inside_modal">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" id="canbtn" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
      <span class="">If you don't have an account, <a style="color: #494fff" href="signup.php">SignUp</a></span>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>