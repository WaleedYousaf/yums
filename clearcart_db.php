<?php
$id= $_GET['idfordelete'];
//$con=mysqli_connect("localhost","root","","testdb");
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


session_start();
$cusem=$_SESSION['login_user'];
$sql = "DELETE FROM cart WHERE cartcusem='$cusem' ;";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location:cart.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

