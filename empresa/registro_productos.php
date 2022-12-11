<?php
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
echo $usuario;
include("db.php");
$conn = mysqli_connect($server, $user, $password, $database);

$id = $_GET['id'];
$Nempresa = $_GET['Nempresa'];
$N_productos = $_POST['N_producto'];
$Categoria = $_POST['categoria'];
$Precio = $_POST['Precio'];
$Descripcion = $_POST['text'];
$descuento = $_POST['descuento'];
$tipoArchivo = $_FILES['image1']['type'];
$nombreArchivo = $_FILES['image1']['name'];
$tamanoArchivo = $_FILES['image1']['size'];
$imagenSubida = fopen($_FILES['image1']['tmp_name'], 'r');

$binariosImagen = fread($imagenSubida, $tamanoArchivo);

$tipoArchivo2 = $_FILES['image2']['type'];
$nombreArchivo2 = $_FILES['image2']['name'];
$tamanoArchivo2 = $_FILES['image2']['size'];
$imagenSubida2 = fopen($_FILES['image2']['tmp_name'], 'r');
$binariosImagen2 = fread($imagenSubida2, $tamanoArchivo2);

$tipoArchivo3 = $_FILES['image3']['type'];
$nombreArchivo3 = $_FILES['image3']['name'];
$tamanAorchivo3 = $_FILES['image3']['size'];
$imagenSubida3 = fopen($_FILES['image3']['tmp_name'], 'r');
$binariosImagen3 = fread($imagenSubida3, $tamanoArchivo3);


$binariosImagen = mysqli_escape_string($conn, $binariosImagen);
$binariosImagen2 = mysqli_escape_string($conn, $binariosImagen2);
$binariosImagen3 = mysqli_escape_string($conn, $binariosImagen3);

$intruccion_SQL = "INSERT INTO productos(N_producto, Categoria, Precio, Descripción, descuento, imagen1, imagen2, imagen3, id_empresa) 
                VALUES ('$N_productos','$Categoria','$Precio','$Descripcion','$descuento','$binariosImagen','$binariosImagen2','$binariosImagen3','$id')";

$res = mysqli_query($conn, $intruccion_SQL);
if ($res) {
    include("registro_productoss.php");
?>
                <h3 class= "ok">¡Te has registrado correctamente!</h3>
                <?php
} else {
    include("registro_productoss.php");
                ?>
                <h3 class= "bad">¡Ups ha ocurrido un error!</h3>
                
                <?php
}





                ?>