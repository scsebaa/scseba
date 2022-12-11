<?php
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
$conn = mysqli_connect($server, $user, $password, $database);

$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$diasemana = $_POST['diasemana'];
$horas = $_POST['horas'];

// modifica en la base de datos
if ($entrada != "") {
    $intruccion_SQL1 = "UPDATE empresa SET hora_atencion_inicio = '$entrada' WhERE id = $id";
    
    $resultado1 = mysqli_query($conn, $intruccion_SQL1);
    $consulta1 = "SELECT*FROM empresa where hora_atencion_inicio = '$entrada' and id='$id'";
    $resultado1 = mysqli_query($conn, $consulta1);
}
if ($salida != "") {
    $intruccion_SQL2 = "UPDATE empresa SET hora_atencion_fin = '$salida' WhERE id = $id";
    $resultado2 = mysqli_query($conn, $intruccion_SQL2);
    $consulta2 = "SELECT*FROM empresa where hora_atencion_fin = '$salida' and id='$id'";
    $resultado2 = mysqli_query($conn, $consulta2);
}
if ($diasemana != "") {
    $intruccion_SQL3 = "UPDATE empresa SET dias_semana_abierto = '$diasemana' WhERE id = $id";
    $resultado3 = mysqli_query($conn, $intruccion_SQL3);
    $consulta3 = "SELECT*FROM empresa where dias_semana_abierto = '$diasemana' and id='$id'";
    $resultado3 = mysqli_query($conn, $consulta3);
}
if ($horas != "") {
    $intruccion_SQL4 = "UPDATE empresa SET hora_x_atencion = '$horas' WhERE id = $id";
    $resultado4 = mysqli_query($conn, $intruccion_SQL4);
    $consulta4 = "SELECT*FROM empresa where hora_x_atencion = '$horas' and id='$id'";
    $resultado4 = mysqli_query($conn, $consulta4);
}
// modifica en la base de datos


// manda alerta
if ($resultado1 || $resultado2) {
    include("servicios2.php");
?>
<h3 class="ok">¡Tus datos se guardaron exitosamente!</h3>
<?php
} else {
    include("servicios2.php");
    ?>
<h3 class="bad">¡No as modificado nada!</h3>
<?php 
}
// manda alerta
    ?>