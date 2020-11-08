<?php
    $usuanom=$_POST['usunom'];
    $nom=$_POST['nom'];
    $ape=$_POST['ape'];
    $usua=$_POST['usu'];
    $cont=$_POST['con'];
    $rcon=$_POST['rcon'];

require("conReg.php");
$verusua =mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Correo='$usua'");
$ver_usua=mysqli_num_rows($verusua);
    if($cont==$rcon){
        if($ver_usua>0){
            echo 'Disculpa el correo ya existe';
        }else{
            mysqli_query($mysqli,"INSERT INTO `usuarios`(`Usuario`,`Nombre`,`Apellido`,`Correo`,`Contrasenia`) VALUES ('$usuanom','$nom','$ape','$usua','$cont')");
            mysqli_query($mysqli,"INSERT INTO `dat_ingreso`(`Correo`, `Contrasenia`) VALUES ($usua','$cont')");
            echo"Registrado correctamente";
        }
    }else{
        echo 'Las contraseñas son incorrectas';
    }
    ?>