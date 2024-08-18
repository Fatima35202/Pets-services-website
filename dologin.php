<?php
session_start();

$e=$_POST["e"];
$p=$_POST["p"];


if($e == $_SESSION["e"])
{
	if($p == $_SESSION["p"])
		{
			header("location:index.html");

		}
	else
		{

			header("location:login.php?er=o");


		}

}
else
{
	header("location:login.php?er=1");

	

}





?>