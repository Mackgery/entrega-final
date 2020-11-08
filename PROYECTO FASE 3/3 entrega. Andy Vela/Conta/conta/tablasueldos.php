<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tabla sueldos</title>
  <?php require "./header/cabeza.php" ?>
  <link rel="stylesheet" href="./tablass.css">
</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
  <div class="tabla1" >
                <table >
 <h2>EMPLEADOS</h2>
<?php
        require("conexion.php");
    $sql=("SELECT *  FROM `sueldos`");
        $query=mysqli_query($conn,$sql);
        echo "<tr>";
        echo" <td >ID</td>";
        echo" <td>NOMBRE</td>";
        echo" <td>CARGO</td>";
        echo" <td>DEPARTAMENTO</td>";
        echo"  <td>SUELDO</td>";
        echo"  <td>BONO LEY</td>";
        echo '<td >HORAS EXTRAS</td>';
        echo"  <td>HORAS DOBLES</td>";
        echo '<td >IGSS</td>';
        echo"  <td>ISR</td>";
        echo '<td >SUELDO DEVENGADO</td>';
        echo"  <td>MES</td>";
        echo "</tr>";
      ?> 
      <?php      
        while($arreglo=mysqli_fetch_array($query)){
            echo "<tr>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
               echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";
              echo "<td>$arreglo[8]</td>";
              echo "<td>$arreglo[9]</td>";
              echo "<td>$arreglo[10]</td>";
              echo "<td>$arreglo[11]</td>";
             ;     
          echo "</tr>";
        }
?>          
                </table>
            </div>
            </div>
<!-- partial -->
  
</body>
</html>
