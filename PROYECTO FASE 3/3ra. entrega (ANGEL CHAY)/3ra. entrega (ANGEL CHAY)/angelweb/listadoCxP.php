 <?php
include("conexion.php");
?>
<!DOCTYPE html>
<head>
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
	<title>LISTADO DE CUENTAS POR PAGAR</title>

	<link href="css/style_nav.css" rel="stylesheet">
 
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
 
</head>
<body>
<center>
    
    
</center>
	<div class="container">
		<div class="content">
			<h2>LISTADO DE CUENTAS POR PAGAR</h2>
			<hr />
 
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM cuentaxpagar  WHERE codigo_Cp='$nik'");
				
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM cuentaxpagar WHERE codigo_Cp='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>
 
			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filtros de cuentas</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="1" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>pendiente</option>
						<option value="2" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>cancelado</option>
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Código</th>
					<th>proveedor</th>
                    <th>empresa</th>
                    <th>telefono</th>
					<th>deuda</th>
					<th>fecha limite de pago</th>
                    <th>estado</th>
                    <th>Acciones</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM cuentaxpagar WHERE estado='$filter' ORDER BY codigo ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM cuentaxpagar ORDER BY codigo_Cp ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['codigo_Cp'].'</td>
							<td><a href="profile.php?nik='.$row['codigo_Cp'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['proveedor'].'</a></td>
                            <td>'.$row['empresa'].'</td>
                            <td>'.$row['telefono'].'</td>
							<td>'.$row['deuda'].'</td>
                            <td>'.$row['fechaMax_sugeridaPago'].'</td>
                             <td>'.$row['estado'].'</td>
							<td>';
							if($row['estado'] == '1'){
								echo '<span class="label label-success">pendiente</span>';
							}
                            else if ($row['estado'] == '2' ){
								echo '<span class="label label-info">cancelado</span>';
							}
                        
						echo '
							</td>
							<td>
 
								<a href="editCxP.php?nik='.$row['codigo_Cp'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="listadoCxP.php?aksi=delete&nik='.$row['codigo_Cp'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['proveedor'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
        <p>CUENTAS POR pagar<?php ("Y");?></p>
	</div>
	<center>
	<a href="registroCxp.php" class="btn btn-sm btn-danger">Nueva cuenta por Pagar</a>
	<a href="menu.html" class="btn btn-sm btn-danger">Menu principal</a>
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>