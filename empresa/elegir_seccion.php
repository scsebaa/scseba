<?php
if ($id == "") {
    $id = $_GET['id'];
$Nempresa = $_GET['Nempresa'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/empresa/style_regi.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>seccion</title>
</head>

<body>

    <div class='cuadrogeneral'>
        <img class="izqu" src="/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png" alt="" width="95"
            height="95">
        <div class="cuadro_1 negro">
            <h2>
                <?php echo $Nempresa ?>
            </h2>


        </div>
        <div>
            <h6></h6>
        </div>
        <strong>
            <h1 class="bg-dark animate__animated animate__backInLeft">Elija una Opcion</h1>
        </strong>

        <?php


        ?>

        <div class="list-group">
            <div><img src="/IMG/Raster.png" alt="" width="150" height="130" class="raster"></div>
            <a href="<?php echo "/empresa/Ver_horarios_R.php?Nempresa=$Nempresa&id=$id"?>" class="list-group-item list-group-item-action">Ver horas de atencion</a>
            <div><img src="/IMG/Raster2.png" alt="" width="130" height="130" class="raster"></div>
            <?php
            echo "<a href='/empresa/registro_productoss.php?Nempresa=$Nempresa&id=$id' class='list-group-item list-group-item-action' >
            Registrar Productos
            </a>";
            ?>
            <div><img src="/IMG/Raster3.png" alt="" width="130" height="130" class="raster"></div>
            <?php
            echo "<a href='/empresa/verproductos.php?Nempresa=$Nempresa&id=$id' class='list-group-item list-group-item-action'>Ver mis Productos
            </a>";
            ?>
        </div>
    </div>
    <div id="inferior" class="btn-group btn-group-lg">

        <a href="<?php echo "/empresa/codigodinamico.php?Nempresa=$Nempresa&id=$id"; ?>" type="button" class="btn btn-secondary">--Camara--
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