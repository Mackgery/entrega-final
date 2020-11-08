<?php
include("conexion.php");
?>
<html>
<head>
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

<body>
        <h2>CREAR CUENTA POR COBRAR</h2>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("diseño.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>CREAR CUENTA POR COBRAR</h2>
			<hr />

			<?php
			if(isset($_POST['add'])){
				$codigo		     = mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));//Escanpando caracteres 
				$nombre_cliente		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre_cliente"],ENT_QUOTES)));//Escanpando caracteres 
				$DPI	 = mysqli_real_escape_string($con,(strip_tags($_POST["DPI"],ENT_QUOTES)));//Escanpando caracteres 
				$direccion	 = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono	     = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$email		 = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha_inicial	 = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_inicial"],ENT_QUOTES)));//Escanpando caracteres 
				$cantidad_Dpago		 = mysqli_real_escape_string($con,(strip_tags($_POST["cantidad_Dpago"],ENT_QUOTES)));//Escanpando caracteres 
                //datos del detalle del sueldo
                $fecha_limite	     = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_limite"],ENT_QUOTES)));//Escanpando 

				
                
                $estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));
                
                $cek = mysqli_query($con, "SELECT * FROM cuentasxcobrar WHERE codigo='$codigo'");
                
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO cuentasxcobrar (codigo,nombre_cliente,DPI,direccion,  telefono,email,fecha_inicial,cantidad_Dpago, fecha_limite,estado)
VALUES('$codigo','$nombre_cliente','$DPI','$direccion','$telefono','$email', '$fecha_inicial','$cantidad_Dpago','$fecha_limite','$estado')") or die(mysqli_error($con));
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Código</label>
					<div class="col-sm-4">
						<input type="text" name="codigo" class="form-control" placeholder="codigo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre de cliente</label>
					<div class="col-sm-4">
						<input type="text" name="nombre_cliente" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DPI</label>
					<div class="col-sm-4">
						<input type="text" name="DPI" class="form-control" placeholder="Doc. Identificacion" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Direccion</label>
					<div class="col-sm-4">
						<input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono</label>
					<div class="col-sm-4">
						<input type="text" name="telefono" class="form-control" placeholder="telefono" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">email</label>
					<div class="col-sm-4">
						<input type="text" name="email" class="form-control" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">fecha Inicial</label>
					<div class="col-sm-4">
						<input type="text" name="fecha_inicial" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="00-00-0000" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">cantidad a pagar </label>
					<div class="col-sm-4">
						<input type="text" name="cantidad_Dpago" class="form-control" placeholder="cantidad pago" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">fecha Limite</label>
					<div class="col-sm-4">
						<input type="text" name="fecha_limite" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="00-00-0000" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-4">
						<select name="estado" class="form-control">
                           <option value="1">pendiente</option>
							<option value="2">cancelado</option>
                        </select>
                      </div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="listadoCuentas.php" class="btn btn-sm btn-danger">listado De Cuentas</a>
						<a href="menu.html" class="btn btn-sm btn-danger">Regresar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>