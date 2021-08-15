<?php
  include_once("header.php");
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
<h1 class="text-center">Search Result</h1>
<div class="row" >
	<form name="searchformshow" class="form-horizontal" method="get" action="" >
     <div class="" style="font-size: 17px;width: -webkit-fill-available;min-width: 800px;margin-left: 20%;margin-right: auto;border: 2px solid #fafafa">
     	<h2></h2>
		<table  class="table table-striped">
			<tr>
				<th>Item Name</th>
				<th>Price</th>
				<th>Item Description</th>
			</tr>
			<?php
			$con=mysqli_connect("localhost","root","","testdb");
  
			if (mysqli_connect_errno()) {
				echo "fail";
				}
			else
			{
				$sitem=$_GET['tosearch'];

				$sql ="SELECT * FROM items WHERE itemname= '$sitem' ;";
				$result=mysqli_query($con,$sql);
			if (mysqli_num_rows($result)>0)
 			{ 
	 			while ($row=mysqli_fetch_assoc($result))
	 			{	 			 
	 			 	echo "<tr>";
					echo "<td>".$row['itemname']."</td>";
					echo "<td>".$row['itemprice']."</td>";
					echo "<td>".$row['itemdesc']."</td>";
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

function OnButton1()
{
    document.cartform.action = 'clearcart_db.php';
    document.cartform.submit();            
    return true;
}

function OnButton2()
{
    document.cartform.action = "order_db.php"
    document.cartform.submit();             
    return true;
}

</script>

</body>
</html>
<?php
  include_once("footer.php");
?>