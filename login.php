<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_error()) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	} 

	$em = $_POST['ema'];
	$ps = $_POST['psw'];

	$sql = "SELECT * FROM customers WHERE em='$em'";

	if ($result = mysqli_query($conn,$sql))
	{
		$row = mysqli_fetch_row($result);
		if($ps==$row[7])
		{
		session_start();
		
		$_SESSION['login_user']=$em;
		$_SESSION['login_user_name']=$row[1];
		$_SESSION['loggedin']=true;
		
		$urlem=$_SESSION['login_user'];
		$urlname=$_SESSION['login_user_name'];

		
		header("location: menu.php?message=$urlname");
		}
		else 
		{
		header("location: loginform2.php");
		echo "Username or Password is invalid";}
		
	}
	else 
	{
		echo "No result found";
	}
	$conn->close();

?>