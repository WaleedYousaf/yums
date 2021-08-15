<?php
$mysqli = new mysqli("localhost", "root", "", "testdb");

if (mysqli_connect_errno()) 
	{
    	echo "Failed To Connect";
    	printf("Connection failed: %s\n", mysqli_connect_error());
    	exit();
	}
	
	$fnamedb = $_POST['fname']; 	
	$lnamedb	= $_POST['lname']; 
	$emaildb = $_POST['ema'];
	$phonedb	= $_POST['phno'];
	$city = $_POST['city'];
	$addrdb  = $_POST['addr'];
	$passdb = $_POST['pas'];

		
		
		$query = "INSERT INTO customers VALUES (DEFAULT,'$fnamedb','$lnamedb','$emaildb','$phonedb','$city','$addrdb','$passdb');";
		
		$mysqli->query($query);


		echo ("Congratulations!");
		echo ("You are registered.");

		$mysqli->close();
		//header('Location: home.php');
		$usersession = "Hello! Waleed";
		header("Location: loginform2.php?message=$usersession");
	
?>