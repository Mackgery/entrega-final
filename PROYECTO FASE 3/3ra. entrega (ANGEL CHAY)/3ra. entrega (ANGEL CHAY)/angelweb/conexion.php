<?php
//Conneccion a la base de datos
$host = "localhost";
$uname = "root";
$pas = "";
$db = "bd_dw";
$tbl_name = "cuentasxcobrar";

$con = mysqli_connect("localhost", "root", "", "bd_dw") or die("Error " . mysqli_error($con));
?>
