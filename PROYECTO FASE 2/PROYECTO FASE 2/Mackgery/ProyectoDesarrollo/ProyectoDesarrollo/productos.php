<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="stylesheet" href="css/productos.css">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script></head>
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
  </li>
</ul>
<br>
<?php 
$conexion=mysqli_connect("localhost:3310","root","","desarrollo");
?>
<body>
<table border="1">
<tr>
<td>ID</td>
<td>Producto</td>
<td>Categoria</td>
<td>Precio</td>
</tr>
<?php
$sql="SELECT * FROM productos";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?> 
<tr>
<td><?php echo $mostrar ["ID_producto"]?> </td>
<td><?php echo $mostrar ["Producto"]?></td>
<td><?php echo $mostrar ["categoria"]?></td>
<td><?php echo $mostrar ["Precio"]?></td>
</tr>
<?php 
}
?>
</table>  
<br>
<a href="nuevoprod.php"><button type="button" class="btn btn-primary">Nuevo producto</button></a>
</body>
</html>
