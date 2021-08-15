<?php
$mysqli = new mysqli("localhost", "root", "", "testdb");

if (mysqli_connect_errno()) 
	{
    	echo "Failed To Connect";
    	printf("Connection failed: %s\n", mysqli_connect_error());
    	exit();
	}
	
	
	//$orderid= $_GET['idfordelete'];
	session_start();
	$ordercusname=$_SESSION['login_user_name'];
	//$ordercusem= $_GET['emfordelete'];	
	$ordercusem=$_SESSION['login_user'];
	$qtyfordelete= $_GET['qtyfordelete'];
	$datetime=date('Y-m-d H:i:s');

		
		$query = "INSERT INTO ordertab VALUES (DEFAULT,'$ordercusem','$ordercusname','$qtyfordelete','$datetime');";
		
		if ($mysqli->query($query) === TRUE) {
    		echo "Record added successfully";
    		
    		header("Location:ordercompleted.php");
			} else {
    		echo "Error deleting record: " . $mysqli->error;
			}
	$mysqli->close();
?>