<?php
    $prod=$_POST['prod'];
    $cat=$_POST['cat'];
    $prec=$_POST['prec'];

require("conReg.php");
            mysqli_query($mysqli,"INSERT INTO `producto`(`Producto`,`ID_categoria`,`Precio`) VALUES ('$prod','$cat','$prec')");
            header("location:nuevoprod.php");
            
    ?>