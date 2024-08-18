<?php

session_start();

$un=$_POST["un"];
$e=$_POST["e"];
$p=$_POST["p"];


$_SESSION["un"]=$un;
$_SESSION["e"]=$e;
$_SESSION["p"]=$p;

header("location:login.php");

?>