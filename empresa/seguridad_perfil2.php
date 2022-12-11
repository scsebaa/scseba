<?php
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
include("db.php");
$conn = mysqli_connect($server, $user, $password, $database);  

$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
  $Nombre = $_POST['Nombre'];
  $Empresa = $_POST['Empresa'];
  $Correo = $_POST['Correo'];
  $Teléfono = $_POST['Teléfono'];
  $Contraseña = $_POST['Contraseña'];
  $D_negocio = $_POST['Mascota'];

if($Nombre != ""){
    $intruccion1 = "UPDATE empresa SET usuario = '$Nombre' WHERE id = $id ;";
    $res1=mysqli_query($conn,$intruccion1);
}  
if($Empresa != ""){
    $intruccion1 = "UPDATE empresa SET N_negocio = '$Empresa' WHERE id = $id ;";
    $res6=mysqli_query($conn,$intruccion1);
}  
if($Correo != ""){
    $intruccion2 = "UPDATE empresa SET email = '$Correo' WHERE id = $id";
    $res2=mysqli_query($conn,$intruccion2);
}

if($Teléfono != ""){
    $intruccion3 = "UPDATE empresa SET telefono = '$Teléfono' WHERE id = $id";
    $res3=mysqli_query($conn,$intruccion3);
}
if($Contraseña != ""){
    $intruccion4 = "UPDATE empresa SET contraseña = '$Contraseña' WHERE id = $id";
    $res4=mysqli_query($conn,$intruccion4);
}
    $intruccion5 = "UPDATE empresa SET D_negocio = '$D_negocio' WHERE id = $id";
    $res5=mysqli_query($conn,$intruccion5);


if($res1 & $res4){
    include("seguridad2.php");
    ?>
    <h3 class= "ok">¡Tus datos fueron guardados correctamente!</h3>
    <?php
}else{
    include("seguridad2.php");
    ?>
    <h3 class= "bad">¡Ocurrio un problema, rellene almenos nombre y contraseña e intente nuevamente!</h3>
    <?php 
}
 
