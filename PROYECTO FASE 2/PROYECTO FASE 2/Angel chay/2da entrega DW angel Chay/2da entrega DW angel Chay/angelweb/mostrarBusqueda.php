<?php

include("conexion.php");
mysqli_select_db($con,$db) or die ("Error al conectar a al BD");
$registros=mysqli_query("SELECT * from db") or die ("Error en la consulta".mysql_error);
while($registro=mysqli_fetch_array($registros)){
    echo $registro['codigo'];

?>
<html>
    <body>
        
    </body>
    <li class="active"><a href="index.php">REGRESAR</a></li>

</html>


