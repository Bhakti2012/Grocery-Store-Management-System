<?php
	include("connect.php");
	include 'index.php';
	$id = $_GET['id'];
	$del = "DELETE from `grocerytb` where `id`='$id'";
	mysqli_query($con,$del);	
	if($del)
{
    mysqli_close($con); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not 
} 
?>
