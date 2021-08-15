<?php
  //include_once("header.php");
  session_start();
  if ($_SESSION['loggedin']==0) {
  	//header("location: loginform2.php");
  	header("location: loginform2.php");
  }
  else{



$con=mysqli_connect("localhost","root","","testdb");
	
	
	$title=$_POST['titletodb'];
	$price=$_POST['pricetodb'];
	$Quntity=$_POST['quantitytodb'];
	$tprice=$_POST['tpricetodb'];
	$custname=$_SESSION['login_user'];
	$datetime=date('Y-m-d H:i:s');
   

if (mysqli_connect_errno()) {
	echo "fail";
}
else
{
	$sql = "INSERT INTO cart VALUES (DEFAULT,'".$custname."','".$title."','".$price."','".$Quntity."','".$datetime."','".$tprice."');";

	if(mysqli_query($con,$sql))
	{
		echo "Insertation Suceessful";
		header("Location:menu.php");
	}else
	{
		echo "Insertation Failed".mysqli_error($con);
	}
}
}
?>