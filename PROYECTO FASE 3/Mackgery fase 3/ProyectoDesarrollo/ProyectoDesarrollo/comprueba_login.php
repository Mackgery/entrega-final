<?php  
try{
    $base = new PDO("mysql:host=localhost:3310; dbname=desarrollo", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= "SELECT * FROM usuarios WHERE Correo = :correo AND Contrasenia = :contrasenia";
    $resultado=$base->prepare($sql);
    $login= htmlentities(addslashes($_POST["correo"]));
    $password = htmlentities(addslashes($_POST["contrasenia"]));
    $resultado->bindValue(":correo", $login);
    $resultado->bindValue(":contrasenia", $password);
    $resultado->execute();
    $numero_registro= $resultado->rowCount();
    if($numero_registro!=0){
    session_start();    
    $_SESSION["correo"]=$_POST["contrasenia"];
    header("location:principal.php");
    }
    else{
    header("location:login.php");
    }
} catch(Exception $e){
    die ("Error: ".$e->getMessage());
}
?>