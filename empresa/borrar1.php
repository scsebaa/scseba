<?php
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
$conn = mysqli_connect($server, $user, $password, $database);

$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
$Pid = $_GET['Pid'];

//(input para que coloque simepre datos = required)
//

$sql = "DELETE FROM registroatencion WHERE id='$Pid'";
$result = mysqli_query($conn, $sql);
$borrar = mysqli_fetch_array($result);
include("Ver_horarios_R.php");
?>
<h3 class="ok">¡Se borro correctamente!</h3>
<?php
