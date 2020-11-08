<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Generar Sueldos</title>
<?php require "./header/cabeza.php"; 
$año=date("Y");
?>
  <link rel="stylesheet" href="./stilito.css">
</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
<form action="genpa.php" method="post" class="formulario">
  <p class="titulo_formulario">Generar sueldos</p>
  <!-- Campos de información -->
    <select class="input_textual" name="mes">
      <option value="" >Selecciones mes:</option>
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>
  <input type="number" value="<?php echo $año;?>" class="input_textual" />
  <button type="submmit"class="input_boton">Generar
    <i aria-hidden="true"></i>
  </button>
  <!-- Fin botón para enviar-->
</form>
<!-- partial -->
  
</body>
</html>
