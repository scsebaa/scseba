<?php
$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
$conn = mysqli_connect($server, $user, $password, $database);
$sql = "SELECT * from productos WHERE id = $id";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link rel='stylesheet' href='/empresa/style_regi.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>productos</title>
</head>

<body>
    <?php
 $mostrar = mysqli_fetch_array($result);
 
 ?>

    <form class='cuadrogeneral' action='<?php echo "modificarPP.php?id=$id&Nempresa=$Nempresa" ?>' method='post'
        enctype='multipart/form-data'>
        <img class='izqu' src='/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png' alt='' width='95'
            height='95'>
        <div class='cuadro_1 negro text-success'>
            <h2><strong> <?php echo $mostrar['N_producto']; ?> </strong></h2>
        </div><br>

        <div>
            <h2></h2>
        </div>
        <strong>
            <h1 class='bg-dark animate__animated animate__backInLeft'>Reescribe todo los datos</h1>
        </strong>

        <label class='negro'><strong>Nombre del producto</strong></label>
        <input type='text' value="<?php echo $mostrar['N_producto']; ?>" placeholder='escriba el nombre de su producto...' name='N_producto'>




        <label class='negro'><strong>Categoria</strong></label>
        <select name='categoria'  class='form-select'>
            <option><?php echo $mostrar['Categoria']; ?></option>
            <option>Casa o camas</option>
            <option>Higiene</option>
            <option>Alimentos</option>
            <option>Jugetes y Accesorios</option>
        </select>

        <label class='negro'><strong>Precio</strong></label>
        <input type='number' value="<?php echo $mostrar['Precio']; ?>" name='Precio' placeholder='...$$$$...'>

        <label class='negro' for='comment'><strong>Descripción del producto</strong></label>
        <textarea class='form-control' rows='5' id='comment'  name='text'><?php echo $mostrar['Descripción'];?></textarea>
        <label class='negro'><strong>% de descuento</strong></label>
        <input type='number' name='descuento' value="<?php echo $mostrar['descuento']; ?>" placeholder='escriba el % de descuento a su producto...'>
        <div>
            <h2></h2>
        </div>

        <label class='bg-dark text-danger'><strong>
                <h4>Agregue 3 imagenes para su Producto</h4>
            </strong></label>
        <input class='negro' type='file' id='myfile' name='image1'>
        <input class='negro' type='file' id='myfile' name='image2'>
        <input class='negro' type='file' id='myfile' name='image3'>

        <div>
            <h2></h2>
        </div>

        <input class='btn btn-success' name='Guardar' type='submit' value='Guardar'>
    </form>

    <div id="inferior" class="btn-group btn-group-lg">

        <a href="<?php echo "/empresa/elegir_seccion.php?Nempresa=$Nempresa&id=$id";?>" type="button" class="btn btn-secondary">--Camara--
            <img src="/IMG/camara.png" alt="" width="35" height="30" class="raster">
        </a>
        <a href="<?php echo "/empresa/elegir_seccion.php?Nempresa=$Nempresa&id=$id";?>" type="button" class="btn btn-secondary"> --Inicio--
            <img src="/IMG/home.png" alt="" width="30" height="30" class="raster">
        </a>
        <a href='<?php echo "/empresa/perfil2.php?Nempresa=$Nempresa&id=$id";?>' type='button' class='btn btn-secondary'>--Cuenta--
            <img src='/IMG/perfil.png' alt='' width='30' height='30' class='raster'>
        </a>
    </div>
</body>

</html>