<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="shortcut icon" href="img/M.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("location:login.php");
}
?>
    <div clas="contenedor">
        <img src="img/M.png" alt="no se encontro la imagen">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="ventashome.php">Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="departamentos.php"> RH  </a>
  <li class="nav-item">
  <a href="cerrar_sesion.php"><button type="button" class="btn btn-danger">Cerrar sesion</button></a>
  </li>
</ul>

<div class="carta1">
<div class="card" style="width: 27rem;">
  <img src="img/vision.png" class="card-img-top" alt="no se encontro la imagen">
  <div class="card-body">
      <h5>Vision</h5>
    <p class="card-text">Garantizar los eficientes procesos para la empresa</p>
  </div>
</div>
</div>

<div class="carta2">
  <div class="card" style="width: 27rem;">
  <img src="img/mision.png" class="card-img-top" alt="no se encontro la imagen">
  <div class="card-body">
  <h5>Mision</h5>
    <p class="card-text">Aportar soluciones de automatizacion de procesos para la empresa</p>
  </div>
</div>
</div>

<div class="carta3">
<div class="card" style="width: 27rem;">
  <img src="img/valores.png" class="card-img-top" alt="no se encontro la imagen">
  <div class="card-body">
  <h5>Valores</h5>
    <p class="card-text">Somos un equipo responsable y eficiente para complacer las solicitudes del cliente</p>
  </div>
</div>
</div>
</div>

</body>
</html>