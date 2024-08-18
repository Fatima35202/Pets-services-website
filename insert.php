<?php
include("connect.php");

$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];

$sqlcommand="insert into tablename('id','username','password','email')values('id','username','password','email')";

$status=mysqli_query($conn,$sqlcommand);

if(status)
{
header("location:showallusers.php?status=1");
}
else
{
echo"problem in query".mysqli_error($conn);
}
?>
