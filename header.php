<!DOCTYPE html>
<html lang="en">
<head>
  <title>TheDailyDoze</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="header_css.css">
  <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    .search-box{
        width: 200px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 15px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
  </style>

</head>
<body>


<div class="container">
  <div class="page-header">
    <div class="" id="headerlogo" style="margin-top: -90px;margin-bottom: -80px">
      <img src="gallery/Logo TheDailyDoze (siteTitle).jpg" class="img-rounded" alt="logo" >
      <div style="float: right;margin: 40px">        
        <button style="width: 200px" type="button" class="btn btn-warning" onclick="window.location.href='cart.php';"><span class="glyphicon glyphicon-shopping-cart"></span> Check Out Cart</button>

        <form id="searchform" action="searchresult.php" method="GET">
          <div class="search-box">
              <input id="getsearch" name="tosearch" type="text" autocomplete="off" placeholder="Search Menu Items..."  />
              <div class="result"></div>
          </div>
        </form>        
    </div>
  </div>
  </div>      
</div>



<nav class="navbar navbar-expand-sm navbar-dark" style="padding: 0px;padding-right: 30px">

  <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a>
  

  <ul class="navbar-nav " >
      <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
      
        
      </li>
      <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
      <li class="nav-item"><a class="nav-link" href="contactus_form.php">Feedback</a></li>
    </ul>
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item"><a class="nav-link" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="nav-item"><!-- <a class="nav-link" href="loginform2.php"><span class="glyphicon glyphicon-user"></span> Login</a> -->
        <?php  
        include_once("login_form.php");  
        ?>  </li>
    </ul>

</nav>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                //document.write("Now result printing");
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();

        // var getsearchvar =document.getElementById('getsearch').value;
        // alert("Value of input is "+getsearchvar);
        document.getElementById("searchform").submit();
        return true;
    });
});
</script>


<?php include_once ("modal.php"); ?>
</body>
</html>
