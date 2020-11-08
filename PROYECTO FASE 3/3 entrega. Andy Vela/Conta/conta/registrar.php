<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro empleados</title>
<?php require "./header/cabeza.php" ?>
  <link rel="stylesheet" href="./stilito.css">
</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
<form action="regis.php" method="post" class="formulario">
  <p class="titulo_formulario">Registro de empleados </p>
  <!-- Campos de información -->
  <input type="text" name="nombrec" placeholder="Nombre completo" class="input_textual"/>  
  <input type="number" name="nit" placeholder="nit" class="input_textual"/>
  <input type="number" name="telefono"  size="8" placeholder="telefono" class="input_textual"/>
  <input type="date" name="fecha" placeholder="dd/mm/aaaa" class="input_textual"/>
  <select class="input_textual" name="cargo">
        <?php
        require "conexion.php";
// Realizamos la consulta para extraer los datos
          $q = "SELECT id_cargo, nombre FROM dep_cargo";
          $consulta = mysqli_query($conn,$q);
          while ($valores = mysqli_fetch_array($consulta)) {
// En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
          }
        ?>
  </select>
  <button type="submmit"class="input_boton">REGISTRAR
    <i aria-hidden="true"></i>
  </button>
  <!-- Fin botón para enviar-->
</form>
<!-- partial -->
  
</body>
</html>
