<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/nuevoprod.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
<ul class="nav justify-content-center">
</li>
  <li class="nav-item">
  <a class="nav-link" href="principal.php">Principal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="venta.php">Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="productos.php">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ventashome.php">Home</a>
</ul>

<form  method="POST" action="registrarprod.php">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo Producto</h5>
      </div>
      <div class="modal-body">
        <table>  
<tr>
<td>  Nombre:</td>
<td><input type="name" name="prod" placeholder="Producto"></td>
</tr>   
<tr>
<td>  Categoria:</td>
<td><input type="name" name="cat" placeholder="Num categoria"></td>
</tr>   
<tr>
<td>  Precio:</td>
<td><input type="name" name="prec" placeholder="Precio"></td><br>
</tr> 
</table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
  </div>    
  </form>
  
<?php 
$conexion=mysqli_connect("localhost:3310","root","","desarrollo");
?>
<body>
<div class="tabla2">
<table border="1">
<tr>
<td>ID</td>
<td>Categoria</td>
</tr>
<?php
$sql="SELECT * FROM Categoria";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?> 
<tr>
<td><?php echo $mostrar ["ID_categoria"]?> </td>
<td><?php echo $mostrar ["categoria"]?></td>
</tr>
<?php 
}
?>
</div>
</body>
</html>