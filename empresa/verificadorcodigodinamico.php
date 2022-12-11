<?php
$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
 $codigodinamico = $_POST['codigodinamico'];
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
include("db.php");
$contador=0;
$conn = mysqli_connect($server, $user, $password, $database);
$sql = "SELECT * from codigo_dinamico ";
$result = mysqli_query($conn, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    if($mostrar['codigo'] == $codigodinamico){
        $contador=2;
        include("codigodinamico.php");
        $sql2 = "DELETE FROM codigo_dinamico WHERE codigo='$codigodinamico'";
        $result2 = mysqli_query($conn, $sql2);
        $borrar2 = mysqli_fetch_array($result2);
        ?>
        <h3 class= "ok">¡Se a verificado correctamente!</h3>
        <?php
        
    }
}
if($contador==0){
 include("codigodinamico.php");
    ?>
    <h3 class= "bad">¡Ocurrio un problema, El código ingresa no se encuentra o ya se ha ocupado!</h3>
    <?php
    } 
?>