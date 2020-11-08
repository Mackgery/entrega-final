<?php
include("conexion.php");
?>
<!DOCTYPE html>
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
		<div class=" ">
			<h2>Datos</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			
			$sql = mysqli_query($con, "SELECT * FROM cuentaspagar WHERE codigo='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: listadoCuentas.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($con, "DELETE FROM cuentaspagar WHERE codigo='$nik'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
				}
			}
			?>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">Código</th>
					<td><?php echo $row['codigo']; ?></td>
				</tr>
				<tr>
					<th>Nombre del empleado</th>
					<td><?php echo $row['nombre_cliente']; ?></td>
				</tr>
				<tr>
					<th>DPI</th>
					<td><?php echo $row['DPI']; ?></td>
				</tr>
				<tr>
					<th>Dirección</th>
					<td><?php echo $row['direccion']; ?></td>
				</tr>
				<tr>
					<th>Teléfono</th>
					<td><?php echo $row['telefono']; ?></td>
				</tr>
				<tr>
					<th>email</th>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<th>fecha inicial</th>
					<td><?php echo $row['fecha_inicial']; ?></td>
				</tr>
				<tr>
					<th>cantidad De Pago</th>
					<td><?php echo $row['cantidad_Dpago']; ?></td>
				</tr>
				<tr>
					<th>fecha limite de pago</th>
					<td><?php echo $row['fecha_limite']; ?></td>
				</tr>
				<tr>
					<th>Estado</th>
					<td>
						<?php 
							if ($row['estado']==1) {
								echo "pendiente";
							} else if ($row['estado']==2){
								echo "cancelado";
						?>
					</td>
				</tr>
				
			</table>
			
			<a href="listadoCuentas.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Regresar</a>
			<a href="editCxC.php?nik=<?php echo $row['nik']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar datos</a>
			<a href="profile.php?aksi=delete&nik=<?php echo $row['nik']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar los datos <?php echo $row['nombre_cliente']; ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
		</div>
	</div>
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>