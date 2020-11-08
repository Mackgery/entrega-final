<?php
include("conexion.php");
?>
<!DOCTYPE html>
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
<html lang="es">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACTUALIZAR DATOS</title>
	<style>
		.content {
			margin-top: 80px;
		}
	</style>	
</head>
<body>
	<div class="container">
		<div class="content">
			<h2>ACTUALIZAR CUENTA POR COBRAR</h2>
			
			<?php
            
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM cuentasxcobrar WHERE codigo='$nik'");
			if(mysqli_num_rows($sql) == 0){
                
				header("Location: listadoCuentas.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$codigo		     = mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));//Escanpando caracteres 
				$nombre_cliente		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre_cliente"],ENT_QUOTES)));//Escanpando caracteres 
				$DPI	 = mysqli_real_escape_string($con,(strip_tags($_POST["DPI"],ENT_QUOTES)));//Escanpando caracteres 
                
				$direccion	 = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono	     = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$email		 = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha_inicial	 = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_inicial"],ENT_QUOTES)));//Escanpando caracteres 
                $cantidad_Dpago		 = mysqli_real_escape_string($con,(strip_tags($_POST["cantidad_Dpago"],ENT_QUOTES)));//Escanpando caracteres 
                $fecha_limite		 = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_limite"],ENT_QUOTES)));//Escanpando caracteres 
                $estado		 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres 

				
$update = mysqli_query($con, "UPDATE cuentasxcobrar SET nombre_cliente='$nombre_cliente',DPI='$DPI',direccion='$direccion',telefono='$telefono',email='$email',fecha_inicial='$fecha_inicial',cantidad_Dpago='$cantidad_Dpago',fecha_limite='$fecha_limite',estado='$estado' WHERE codigo='$nik'") or die (mysqli_error());
				if($update){
					header("Location: editCxC.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Código</label>
					<div class="col-sm-2">
						<input type="text" name="codigo" value="<?php echo $row ['codigo']; ?>" class="form-control" placeholder="NIK" required>
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="nombre_cliente" value="<?php echo $row ['nombre_cliente']; ?>" class="form-control" placeholder="nombre_cliente" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DPI</label>
					<div class="col-sm-4">
						<input type="text" name="DPI" value="<?php echo $row ['DPI']; ?>" class="form-control" placeholder="DPI" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
						<textarea name="direccion" class="form-control" placeholder="dirección"><?php echo $row ['direccion']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="text" name="telefono" value="<?php echo $row ['telefono']; ?>" class="form-control" placeholder="teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">email</label>
					<div class="col-sm-3">
						<input type="text" name="email" value="<?php echo $row ['email']; ?>" class="form-control" placeholder="email" required>
					</div>
                
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">fecha inicial</label>
					<div class="col-sm-3">
             		<input type="text" name="fecha_inicial" value="<?php echo $row ['fecha_inicial']; ?>" class="form-control" placeholder="fecha inicial" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">cantidad pago</label>
					<div class="col-sm-3">
             		<input type="text" name="cantidad_Dpago" value="<?php echo $row ['cantidad_Dpago']; ?>" class="form-control" placeholder="cantidad pago" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">fecha Limite</label>
					<div class="col-sm-3">
             		<input type="text" name="fecha_limite" value="<?php echo $row ['fecha_limite']; ?>" class="form-control" placeholder="fecha limite" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="estado" class="form-control">
							<option value="">- Selecciona estado -</option>
                            <option value="1" <?php if ($row ['estado']==1){echo "selected";} ?>>pendiente</option>
							<option value="2" <?php if ($row ['estado']==2){echo "selected";} ?>>cancelado</option>
						</select> 
					</div>
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="listadoCuentas.php" class="btn btn-sm btn-danger">regresar</a>
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