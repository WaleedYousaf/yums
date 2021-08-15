<?php
  include_once("header2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		.row
		{
			margin-left: 10%;
			margin-right: 10%;
		}
	</style>
</head>
<body>

<div class="container" style="">
<h1 class="text-center">Order Details</h1>
<div class="row" >
	<form name="ordercompformshow" class="form-horizontal" method="get" action="" >
     <div class="" style="font-size: 17px;width: -webkit-fill-available;min-width: 800px;margin-left: 20%;margin-right: auto;border: 2px solid #fafafa">
     	<h2></h2>
		<table  class="table table-striped">
			<tr>
				<th>Order ID</th>
				<th>Customer Email</th>
				<th>Customer Name</th>
				<th>Order Cost</th>
				<th>Order Time</th>
				<!-- <th>Delete</span></th> -->
			</tr>
			<?php
			$con=mysqli_connect("localhost","root","","testdb");
  
			if (mysqli_connect_errno()) {
				echo "fail";
				}
			else
			{
				//session_start();
				$sitem=$_SESSION['login_user'];
				$datetimeafter=date('Y-m-d H:i:s');
				$timeafteronehr=date('Y-m-d H:i:s',strtotime('now -2 minute'));
				//echo("$datetimeafter");
				//echo("$timeafteronehr");
				
				$sql ="SELECT * FROM ordertab WHERE ocusem= '$sitem' AND otimedate <= '$datetimeafter' AND otimedate >= '$timeafteronehr';";
				$result=mysqli_query($con,$sql);
			if (mysqli_num_rows($result)>0)
 			{ 
	 			while ($row=mysqli_fetch_assoc($result))
	 			{	 			 
	 			 	echo "<tr>";
					echo "<td>".$row['oid']."</td>";
					echo "<td>".$row['ocusem']."</td>";
					echo "<td>".$row['ocusname']."</td>";
					echo "<td><span>&#36; </span>".$row['oqty']."</td>";
					echo "<td>".$row['otimedate']."</td>";
					echo "<td><a href='clearcart_db.php' class='btn btn-primary'>Submit Order</a></td>";
			     	echo"</tr>";
	 			}
 			}
			}

			?>

		</table>
		
	   </div>

	

</form>

</div>
</div>
<script language="Javascript">

</script>

</body>
</html>
<?php
  include_once("footer.php");
?>