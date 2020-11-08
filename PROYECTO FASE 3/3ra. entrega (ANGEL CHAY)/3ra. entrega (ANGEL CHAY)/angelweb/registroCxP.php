<?php
include("conexion.php");
?>
<html>
<head>
   <link href="dise%C3%B1oCxp.css" rel="stylesheet" type="text/css">
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
       
        <h2>CREAR CUENTA POR PAGAR</h2>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("diseño.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>CREAR CUENTA POR PAGAR</h2>
			<hr />

			<?php
			if(isset($_POST['add'])){
				$codigo_Cp		     = mysqli_real_escape_string($con,(strip_tags($_POST["codigo_Cp"],ENT_QUOTES)));//Escanpando caracteres 
				$proveedor		     = mysqli_real_escape_string($con,(strip_tags($_POST["proveedor"],ENT_QUOTES)));//Escanpando caracteres 
				$empresa	 = mysqli_real_escape_string($con,(strip_tags($_POST["empresa"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono	 = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$deuda	     = mysqli_real_escape_string($con,(strip_tags($_POST["deuda"],ENT_QUOTES)));//Escanpando caracteres 
				$fechaMax_sugeridaPago		 = mysqli_real_escape_string($con,(strip_tags($_POST["fechaMax_sugeridaPago"],ENT_QUOTES)));//Escanpando caracteres 
                
                $estado		 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres 
                
                $cek = mysqli_query($con, "SELECT * FROM cuentaxpagar WHERE codigo_Cp='$codigo_Cp'");
                
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO cuentaxpagar (codigo_Cp,proveedor,empresa,telefono,deuda,  fechaMax_sugeridaPago,estado)
VALUES('$codigo_Cp','$proveedor','$empresa','$telefono','$deuda','$fechaMax_sugeridaPago','$estado')") or die(mysqli_error($con));
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
						<input type="text" name="codigo_Cp" class="form-control" placeholder="codigo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Proveedor</label>
					<div class="col-sm-4">
						<input type="text" name="proveedor" class="form-control" placeholder="proveedor" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Empresa</label>
					<div class="col-sm-4">
						<input type="text" name="empresa" class="form-control" placeholder="empresa" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono</label>
					<div class="col-sm-4">
						<input type="text" name="telefono" class="form-control" placeholder="telefono" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">deuda</label>
					<div class="col-sm-4">
						<input type="text" name="deuda" class="form-control" placeholder="deuda" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">fechaMax_sugeridaPago</label>
					<div class="col-sm-4">
						<input type="text" name="fechaMax_sugeridaPago" class="form-control" placeholder="fechaMax" required>
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
						<a href="listadoCxP.php" class="btn btn-sm btn-danger">listado De Cuentas</a>
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