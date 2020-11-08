<?php

require "conexion.php";

       $Usuario = $_POST["usuario"];
      $Contra = $_POST["contra"];
$consulta = " SELECT * FROM admin WHERE Email = '$Usuario' AND contraseña = '$Contra'";
$result = mysqli_query($conn,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}else{
             echo "SI EXISTE";
             header("Location:admin.php");
        } 
?>