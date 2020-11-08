<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro porcentajes</title>
<?php require "./header/cabeza.php" ?>
  <link rel="stylesheet" href="./stilito.css">
</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
<form action="regp.php" method="post" class="formulario">
  <p class="titulo_formulario">Registro de porcentajes </p>
  <!-- Campos de información -->
  <input type="text" name="nombre" placeholder="Nombre " class="input_textual"/>  
  <input type="number" name="porcentaje" placeholder="4.83" class="input_textual"  step="any" />
  <button type="submmit"class="input_boton">REGISTRAR
    <i aria-hidden="true"></i>
  </button>
  <!-- Fin botón para enviar-->
</form>
<!-- partial -->
  
</body>
</html>
