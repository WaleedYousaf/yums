<?php
  session_start();
  if ($_SESSION['loggedin']==0) {
  header("location: loginform2.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
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

<?php include_once("header2.php"); ?>
<?php $urlem=$_SESSION['login_user']; ?>
<div class="container" style="">
<h1 class="text-center">Items In Cart</h1>
<div class="row" >
	<form name="cartform" class="form-horizontal" method="get" action="" >
     <div class="" style="font-size: 17px;width: -webkit-fill-available;min-width: 800px;margin-left: 20%;margin-right: auto;border: 2px solid #fafafa">
     	<h2></h2>
		<table  class="table table-striped">
			<tr>
				<th></th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
				<th></th>
				<th>Delete</span></th>

			</tr>
			<?php
			$con=mysqli_connect("localhost","root","","testdb");
  
			if (mysqli_connect_errno()) {
				echo "fail";
				}
			else
			{
				$custname=$_SESSION['login_user'];
				$sql ="SELECT * FROM cart WHERE cartcusem = '$custname';";
				$result=mysqli_query($con,$sql);
			if (mysqli_num_rows($result)>0)
 			{ 
	 			while ($row=mysqli_fetch_assoc($result))
	 			{
	 			 
	 			 	echo "<tr>";
	 			 	echo " <td><input id= '".$row['cartcusem']."' type='hidden' name= 'emfordelete'  value= '".$row['cartcusem']."'></td> ";
					//echo "<td>".$row['cartcusem']."</td>";
					// echo "<td>'<input type='hidden' name= 'idfordelete2'  value= '".$row['cartid']."'> '</td>";
					echo "<td>".$row['cartpname']."</td>";
					echo "<td><span>&#36; </span>".$row['cartpprice']."</td>";
					echo "<td>".$row['cartpquantity']."</td>";
					echo "<td><span>&#36; </span>".$row['cartptprice']."</td>";

					echo "<td>
							<form method='get' action='deletecartitem_db.php?id=".$row["cartid"]."'> </td>";
							
							echo "<td>							
							<button class='glyphicon glyphicon-remove' type='submit'></button></td>";
							
							echo "<td> <input id= '".$row['cartid']."' type='hidden' name= 'idfordelete'  value= '".$row['cartid']."'>

							</form>
						</td>";
					//echo "<td><INPUT type='button' value='Button1' name= 'button1' onclick= 'return OnButton1();'></td>";

			     	echo"</tr>";
	 			}
 			}

			}

			// echo " <td><input id= 'touse' type='' name= 'touse'  
			
			// value= '' ></td> ";


			?>
		</table>
		<div style="text-align: right; margin-right: 10%">
	   <h4 style="font-weight: bold;">Grand Total</h4>
	   
	   	<p style="font-weight: bold"> 
		   	<?php
		   	$query3 = "SELECT * FROM cart WHERE cartcusem= '$custname' ";
			$query_run = mysqli_query($con,$query3);

			$qty= 0;
			while ($num = mysqli_fetch_assoc ($query_run)) {
	    		$qty += $num['cartptprice'];
			}
				echo "<span>&#36; </span> $qty";
			
				
	 			echo " <td><input id= 'qtyfordelete' type='hidden' name= 'qtyfordelete'  value='$qty' ></td> ";





			?>
		</p>
	   	<td><INPUT class='btn btn-primary' type='button' value='Confirm Order' name= 'button2' onclick= 'return OnButton2();'></td>

	   	<td><INPUT class='btn btn-danger' type='button' value='Clear Cart' name= 'button2' onclick= 'return OnButton1();'></td>
	   </div>
	</div>

</form>

</div>
</div>
<br>
<br>
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

<?php
  include_once("footer.php");
?>
</body>
</html>
