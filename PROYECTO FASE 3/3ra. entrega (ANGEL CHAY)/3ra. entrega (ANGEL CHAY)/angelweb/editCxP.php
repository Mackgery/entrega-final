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
	<title>ACTUALIZAR DATOS DE CUENTAS POR PAGAR </title>
	<style>
		.content {
			margin-top: 80px;
		}
	</style>	
</head>
<body>
	<div class="container">
		<div class="content">
			<h2>ACTUALIZAR CUENTA POR PAGAR</h2>
			
			<?php
            $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM cuentaxpagar WHERE codigo_Cp='$nik'");
			if(mysqli_num_rows($sql) == 0){
                
				header("Location: listadoCxP.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$codigo_Cp	     = mysqli_real_escape_string($con,(strip_tags($_POST["codigo_Cp"],ENT_QUOTES)));//Escanpando caracteres 
				$proveedor		     = mysqli_real_escape_string($con,(strip_tags($_POST["proveedor"],ENT_QUOTES)));//Escanpando caracteres 
				$empresa	 = mysqli_real_escape_string($con,(strip_tags($_POST["empresa"],ENT_QUOTES)));//Escanpando caracteres 
            
				$telefono	     = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$deuda	 = mysqli_real_escape_string($con,(strip_tags($_POST["deuda"],ENT_QUOTES)));//Escanpando caracteres 
				$fechaMax_sugeridaPago	 = mysqli_real_escape_string($con,(strip_tags($_POST["fechaMax_sugeridaPago"],ENT_QUOTES)));//Escanpando caracteres 
                $estado	 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres 

				
$update = mysqli_query($con,"UPDATE cuentaxpagar SET proveedor='$proveedor',empresa='$empresa',telefono='$telefono',deuda='$deuda',fechaMax_sugeridaPago='$fechaMax_sugeridaPago',estado='$estado' WHERE codigo_Cp='$nik'") or die (mysqli_error());
				if($update){
					header("Location: editCxP.php?nik=".$nik."&pesan=sukses");
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
						<input type="text" name="codigo_Cp" value="<?php echo $row['codigo_Cp']; ?>" class="form-control" placeholder="codigo" required>
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">proveedor</label>
					<div class="col-sm-4">
						<input type="text" name="proveedor" value="<?php echo $row ['proveedor']; ?>" class="form-control" placeholder="proveedor" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">empresa</label>
					<div class="col-sm-4">
						<input type="text" name="empresa" value="<?php echo $row ['empresa']; ?>" class="form-control" placeholder="empresa" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">telefono</label>
					<div class="col-sm-3">
						<textarea name="telefono" class="form-control" placeholder="telefono"><?php echo $row ['telefono']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">deuda</label>
					<div class="col-sm-3">
						<input type="text" name="deuda" value="<?php echo $row ['deuda']; ?>" class="form-control" placeholder="deuda" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">fecha Max</label>
					<div class="col-sm-3">
						<input type="text" name="fechaMax_sugeridaPago" value="<?php echo $row ['fechaMax_sugeridaPago']; ?>" class="form-control" placeholder="fechaMax_sugeridaPago" required>
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