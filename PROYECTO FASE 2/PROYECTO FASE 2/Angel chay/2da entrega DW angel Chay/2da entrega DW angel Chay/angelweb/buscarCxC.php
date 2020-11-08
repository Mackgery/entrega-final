<?php
include("conexion.php");
$codigo = $_POST['codigo'];
mysqli_select_db($con,$db) or die ("Error al conectar a al BD");
$registros=mysqli_query($con,"SELECT * FROM cuentasxcobrar WHERE codigo='$codigo'"); 

while($registro=mysqli_fetch_array($registros)){
    echo $registro['codigo']."------ ".$registro['nombre_cliente']."----- ".$registro['DPI']."----- ".$registro['telefono']."--- ".$registro['cantidad_Dpago'];
}
?>
<html>
    
    <li class="active"><a href="listadoCuentas.php">REGRESAR</a></li>

</html>