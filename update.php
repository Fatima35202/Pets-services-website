<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
$id=$_POST["id"];
$un=$_POST["username"];
$p=$_POST["password"];
$e=$_POST["email"];

$id = mysqli_real_escape_string($conn, $id);
$un = mysqli_real_escape_string($conn, $un);
$p = mysqli_real_escape_string($conn, $p);
$e = mysqli_real_escape_string($conn, $e);

$sql="UPDATE users SET username='$un', password='$p', email='$e' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
	header("location:showallusers.php");
	exit();
}else{
	echo"Error updating record:".mysqli_error($conn);
}
mysqli_close($conn);

?>
