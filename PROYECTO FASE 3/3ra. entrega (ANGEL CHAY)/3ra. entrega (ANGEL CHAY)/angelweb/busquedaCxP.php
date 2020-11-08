<?php
include("conexion.php");

//Comprobar de envío el formulario

?>
<!DOCTYPE html>
<head>}
      <link href="dise%C3%B1olistacxc.css" rel="stylesheet" type="text/css">
    <title>Registro Usuario</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <!--link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /-->
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 
</head>
<html lang="es">
<head>
 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de empleados</title>
 
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
 
</head>
<body>
 
	<div class="container">
		<div class="content">
			<h2>SELECIONE EL MES PARA BUSCAR </h2>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <select name="cuenta" id="cuenta">
 <option value="0">Todo</option>
  <option value="1">ENERO</option>
  <option value="2">FEBRERO</option>
  <option value="3">MARZO</option>
  <option value="4">ARRIL</option>
   <option value="5">MAYO</option>
    <option value="6">JUNIO</option>
     <option value="7">JULIO</option>
      <option value="8">AGOSTO</option>
       <option value="9">SEPTIEMBRE</option>
        <option value="10">OCTUBRE</option>
        <option value="11">NOVIEMBRE</option>
        <option value="12">DICIEMBRE</option>

</select>
        <input type="submit" name="buscar" value="buscar">
    </form>
    
 
			<br />
			
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>Código</th>
					<th>proveedor</th>
                    <th>deuda Total</th>
                    <th>fecha maxima de pago</th>
				</tr>
				<?php
    if (isset($_POST['cuenta'])) {

    $mes =$_POST['cuenta'];
    if($mes){
    $result = mysqli_query($con, "SELECT * FROM cuentaxpagar WHERE MONTH(cuentaxpagar.fechaMax_sugeridaPago)=".$mes."");
        }else{
       $result = mysqli_query($con, "SELECT * FROM cuentaxpagar"); 
    }
    $rows = mysqli_num_rows($result); 
    if ($rows) {
       while ($row = mysqli_fetch_array($result)) { 
        echo '<tr>';  
    echo '<td>'.$row['codigo_Cp'].'</td>';
    echo '<td>'.$row['proveedor'].'</td>';
    echo '<td>'.$row['deuda'].'</td>';
    echo '<td>'.$row['fechaMax_sugeridaPago'].'</td>';
    echo '</tr>';  
       }
    } else {
        $errormsg = "Revisa los datos!!!";
    }
}
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>LISTA DE EMPLEADOS CONSULTING, S.A <?php echo date("Y");?></p
		</center>
		<div class="row">
        <div class="col-md-4 col-md-offset-4 text-center"> 
        <a href="menu.html">regresar</a>
        </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

