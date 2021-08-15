<?php
$id= $_GET['idfordelete'];

$conn = new mysqli("localhost", "root", "", "testdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM cart WHERE cartid= '$id';";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location:cart.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

