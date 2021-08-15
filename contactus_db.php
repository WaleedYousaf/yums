<?php
$mysqli = new mysqli("localhost", "root", "", "testdb");

if (mysqli_connect_errno()) 
	{
    	printf("Connection failed: %s\n", mysqli_connect_error());
    	exit();
	}
	
	$namedb = $_POST['name']; 	 
	$emaildb = $_POST['ema'];
	$phonedb	= $_POST['phno'];
	$citydb = $_POST['city'];
	$addrdb  = $_POST['addr'];
	$subjectdb = $_POST['subject'];
	$cmsg = $_POST['msg'];

		
		
		$query = "INSERT INTO contactus VALUES (DEFAULT,'$namedb','$emaildb','$phonedb','$citydb','$addrdb','$subjectdb','$cmsg');";
		
		$mysqli->query($query);

		echo ("Successful");

		$mysqli->close();
		header("Location: home.php");
	
?>