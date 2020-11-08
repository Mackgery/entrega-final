<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
<form  method="POST" action="registrar.php">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registro</h5>
      </div>
      <div class="modal-body">
        <table>
<td> Usuario</td>
<td><input type="name" name="usunom" placeholder="Nom Usuario"></td>
</tr>   
<tr>
<td>  Nombres:</td>
<td><input type="name" name="nom" placeholder="Nombre"></td>
</tr>   
<tr>
<td>  Apellidos:</td>
<td><input type="name" name="ape" placeholder="Apellidos"></td>
</tr>   
<tr>
<td>    Correo:</td>
<td><input type="name" name="usu" placeholder="Correo"></td><br>
</tr> 
<td>    Contraseña:</td>
<td><input type="password" name="con" placeholder="Contraseña"></td>
</tr>
<tr>
<td>    Confirmacion:</td>
<td><input type="password" name="rcon" placeholder="Confirmar contraseña"></td>
</tr>
</table>
      </div>
      <div class="modal-footer">
      <a href="login.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button></a>
        <button type="submit" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
  </div>    
  </form>
</body>
</html>