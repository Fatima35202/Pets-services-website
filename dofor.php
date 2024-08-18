<?php
session_start();

$un=$_POST["un"];
$e=$_POST["e"];
$p=$_POST["p"];


if($un == $_SESSION["un"])
{
	if($e == $_SESSION["e"])
		{
			$_SESSION["p"]==$p;
			header("location:login.php");

		}
	else
		{

			header("location:for.php?er=o");


		}

}
else
{
	header("location:for.php?er=1");

	

}





?>