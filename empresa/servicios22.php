<?php
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
$conn = mysqli_connect($server, $user, $password, $database);

$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
   $ConsultasaDomicilio = $_POST['ConsultasaDomicilio'];
   $ExámenesyHospitalización =$_POST['ExámenesyHospitalización'];
   $UrgenciasyCirugías = $_POST['UrgenciasyCirugías'];
   $CastraciónyEsterilización = $_POST['CastraciónyEsterilización'];
   $TrasladodePacientes = $_POST['TrasladodePacientes'];
   $Vacunasyantiparasitarios = $_POST['Vacunasyantiparasitarios'];

//si ya existe 
$sql1="SELECT*FROM servicios where nombre='Consultas a Domicilio' and empresa_id='$id'";
$result1 = mysqli_query($conn, $sql1);
$mostrar1 = mysqli_fetch_array($result1);
$existe1 = $mostrar1['nombre'];

$sql2="SELECT*FROM servicios where nombre='Exámenes y Hospitalización' and empresa_id='$id'";
$result2 = mysqli_query($conn, $sql2);
$mostrar2 = mysqli_fetch_array($result2);
$existe2 = $mostrar2['nombre'];

$sql3="SELECT*FROM servicios where nombre='Urgencias y Cirugías' and empresa_id='$id'";
$result3 = mysqli_query($conn, $sql3);
$mostrar3 = mysqli_fetch_array($result3);
$existe3 = $mostrar3['nombre'];

$sql4="SELECT*FROM servicios where nombre='Castración y Esterilización' and empresa_id='$id'";
$result4 = mysqli_query($conn, $sql4);
$mostrar4 = mysqli_fetch_array($result4);
$existe4 = $mostrar4['nombre'];

$sql5="SELECT*FROM servicios where nombre='Traslado de Pacientes' and empresa_id='$id'";
$result5 = mysqli_query($conn, $sql5);
$mostrar5 = mysqli_fetch_array($result5);
$existe5 = $mostrar5['nombre'];

$sql6="SELECT*FROM servicios where nombre='Vacunas y antiparasitarios' and empresa_id='$id'";
$result6 = mysqli_query($conn, $sql6);
$mostrar6 = mysqli_fetch_array($result6);
$existe6 = $mostrar6['nombre'];
//si ya existe

// ecribe en la base de datos
if($ConsultasaDomicilio != "" & $existe1 == "" ){
    $intruccion_SQL1 = "INSERT INTO servicios (nombre, empresa_id) VALUES ('$ConsultasaDomicilio','$id')";
    $resultado1 = mysqli_query($conn,$intruccion_SQL1);
    $consulta1="SELECT*FROM servicios where nombre='$ConsultasaDomicilio' and empresa_id='$id'";
        $resultado1=mysqli_query($conn,$consulta1);
}
if($ExámenesyHospitalización != "" & $existe2 == "" ){
    $intruccion_SQL2 = "INSERT INTO servicios (nombre, empresa_id) VALUES ('$ExámenesyHospitalización','$id')";
    $resultado2 = mysqli_query($conn,$intruccion_SQL2);
    $consulta2="SELECT*FROM servicios where nombre='$ConsultasaDomicilio' and empresa_id='$id'";
        $resultado2=mysqli_query($conn,$consulta2);
}
if($UrgenciasyCirugías != "" & $existe3 == "" ){
    $intruccion_SQL3 = "INSERT INTO servicios (nombre, empresa_id) VALUES ('$UrgenciasyCirugías','$id')";
    $resultado3 = mysqli_query($conn,$intruccion_SQL3);
    $consulta3="SELECT*FROM servicios where nombre='$ConsultasaDomicilio' and empresa_id='$id'";
        $resultado3=mysqli_query($conn,$consulta3);
}
if($CastraciónyEsterilización != "" & $existe4 == "" ){
    $intruccion_SQL4 = "INSERT INTO servicios (nombre, empresa_id) VALUES ('$CastraciónyEsterilización','$id')";
    $resultado4 = mysqli_query($conn,$intruccion_SQL4);
    $consulta4="SELECT*FROM servicios where nombre='$ConsultasaDomicilio' and empresa_id='$id'";
        $resultado4=mysqli_query($conn,$consulta4);
}
if($TrasladodePacientes != "" & $existe5 == "" ){
    $intruccion_SQL5 = "INSERT INTO servicios (nombre, empresa_id) VALUES ('$TrasladodePacientes','$id')";
    $resultado5 = mysqli_query($conn,$intruccion_SQL5);
    $consulta5="SELECT*FROM servicios where nombre='$ConsultasaDomicilio' and empresa_id='$id'";
        $resultado5=mysqli_query($conn,$consulta5);
}
if($Vacunasyantiparasitarios != "" & $existe6 == "" ){
    $intruccion_SQL6 = "INSERT INTO servicios (nombre, empresa_id) VALUES ('$Vacunasyantiparasitarios','$id')";
    $resultado6 = mysqli_query($conn,$intruccion_SQL6);
    $consulta6="SELECT*FROM servicios where nombre='$ConsultasaDomicilio' and empresa_id='$id'";
        $resultado6=mysqli_query($conn,$consulta6);
}
// escribe en la base de datos

// borra datos
if($ConsultasaDomicilio == "" & $existe1 == "Consultas a Domicilio" ){
    $borrar1="DELETE FROM servicios WHERE empresa_id='$id' and nombre = 'Consultas a Domicilio'";
    $resultado6 = mysqli_query($conn,$borrar1);
    $hola1 = 1; 
}
if($ExámenesyHospitalización == "" & $existe2 == "Exámenes y Hospitalización" ){
    $borrar2="DELETE FROM servicios WHERE empresa_id='$id' and nombre = 'Exámenes y Hospitalización'";
    $resultado6 = mysqli_query($conn,$borrar2);
    $hola1 = 1; 
}
if($UrgenciasyCirugías == "" & $existe3 == "Urgencias y Cirugías" ){
    $borrar3="DELETE FROM servicios WHERE empresa_id='$id' and nombre = 'Urgencias y Cirugías'";
    $resultado6 = mysqli_query($conn,$borrar3);
    $hola1 = 1; 
}
if($CastraciónyEsterilización == "" & $existe4 == "Castración y Esterilización" ){
    $borrar4="DELETE FROM servicios WHERE empresa_id='$id' and nombre = 'Castración y Esterilización'";
    $resultado6 = mysqli_query($conn,$borrar4);
    $hola1 = 1; 
}
if($TrasladodePacientes == "" & $existe5 == "Traslado de Pacientes" ){
    $borrar5="DELETE FROM servicios WHERE empresa_id='$id' and nombre = 'Traslado de Pacientes'";
    $resultado6 = mysqli_query($conn,$borrar5);
    $hola1 = 1; 
}
if($Vacunasyantiparasitarios == "" & $existe6 == "Vacunas y antiparasitarios" ){
    $borrar6="DELETE FROM servicios WHERE empresa_id='$id' and nombre = 'Vacunas y antiparasitarios'";
    $resultado6 = mysqli_query($conn,$borrar6);
    $hola1 = 1; 
}
// borra datos

// manda alerta
if($resultado1 || $resultado2 || $resultado3 || $resultado4 || $resultado5 || $resultado6 || $hola1 == 1){
    include("servicios2.php");
    ?>
    <h3 class= "ok">¡Tus datos se guardaron exitosamente!</h3>
    <?php
 }
 else{
    include("servicios2.php");
    ?>
    <h3 class= "bad">¡No as modificado nada!</h3>
    <?php
 }
 // manda alerta
?>