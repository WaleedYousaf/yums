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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TheDailyDoze</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="/testdb/homecss.css" rel="stylesheet">

  <style type="text/css">
    .slidergallery{

    }
    .mySlides{
      width: 1100px;margin-left: -60px
    }

  </style>
  
  
</head>

<body>

<?php
  //include_once("header.php");
?>  

<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides" style="width: 1100px;margin-left: -60px">
  <img class="slidergallery" src="gallery\meal1.jpg" style="">
  <div class="w3-display-middle w3-black">
  </div>
</div>

<div class="w3-display-container mySlides">
  <img class="slidergallery" src="gallery/meal2.jpg">
  <div class="w3-display-middle w3-black">
  </div>
</div>

<div class="w3-display-container mySlides">
  <img class="slidergallery" src="gallery/meal3.jpg">
  <div class="w3-display-middle w3-black">
  </div>
</div>

<div class="w3-display-container mySlides">
  <img class="slidergallery" src="gallery/meal4.jpg">
  <div class="w3-display-middle w3-black">
  </div>
</div>

<div class="w3-display-container mySlides">
  <img class="slidergallery" src="gallery/meal5.jpg">
  <div class="w3-display-middle w3-black">
  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)" style="margin-left: -50px">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)" style="margin-right: -50px">&#10095;</button>

</div>


<?php  
        include_once("menu.php");  
        ?>


<?php
  include_once("footer.php");
?>




<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}



var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);
}
</script>
</body>
</html>
