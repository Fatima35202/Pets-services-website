<?php
include("connect.php");

$id=$_GET["id"];

$id=mysqli_real_escape_string($conn,$id);

$sql="DELETE FROM users WHERE id='$id'";

if(mysqli_query($conn,$sql)){
	header("location:showallusers.php");
	exit();
}else{
	echo"Error deleting record:".mysqli_error($conn);
}

mysqli_close($conn);

?>