<?php
$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];
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
    <title>productos</title>
</head>

<body>
    <div class="cuadrogeneral">
        <strong>
            <h1 class="bg-dark ">Cuenta </h1>
        </strong><br>
        <br>
        <table>
            <tr>
                <td>
                    <div class="centrar1"><img src="/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png"
                            alt width="150" height="150"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "<div class='centrar1 cuadro8 negro'><h3><strong> $Nempresa </strong></h3>
                    
                    </div>"; ?>

                </td>
            </tr>
        </table>
        <br>
        <br>
        <TABLE class="centrar2">
            <TR>
                <?php echo "<TD><a href='/empresa/mis_datos2.php?Nempresa=$Nempresa&id=$id'class=' list-group-item-action ' ><div class='cuadro4'><br><h4><strong>Mis datos</strong></h4></div>
                </a>
                </TD>"; ?>
                <td>
                    <div class="cuadro5"><img src="/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png"
                            alt width="80" height="80">
                    </div>
                </td>
            </TR>
            <tr>
                <TD><br>
                    <a href='<?php echo "/empresa/seguridad2.php?Nempresa=$Nempresa&id=$id"; ?>'
                        class=' list-group-item-action '>
                        <div class='cuadro4'><br>
                            <h4><strong>Seguridad</strong></h4>
                        </div>
                    </a>
                </TD>
                <td><br>
                    <div class="cuadro5"><img src="/IMG/seguridad.png" alt width="80" height="80">
                    </div>
                </td>
                </TD>
            </tr>
            <tr>
                <TD><br>
                    <a href='<?php echo "/empresa/servicios2.php?Nempresa=$Nempresa&id=$id"; ?>'
                        class=' list-group-item-action '>
                        <div class='cuadro4'><br>
                            <h4><strong>Servicios</strong></h4>
                        </div>
                    </a>
                </TD>
                <td><br>
                    <div class="cuadro5"><img src="/IMG/servicios.png" alt width="80" height="80">
                    </div>
                </td>
                </TD>
            </tr>

        </TABLE>
    </div>
    <div id="inferior" class="btn-group btn-group-lg">

        <a href="<?php echo "/empresa/codigodinamico.php?Nempresa=$Nempresa&id=$id"; ?>" type="button"
            class="btn btn-secondary">--Camara--
            <img src="/IMG/camara.png" alt="" width="35" height="30" class="raster">
        </a>
        <a href="<?php echo "/empresa/elegir_seccion.php?Nempresa=$Nempresa&id=$id"; ?>" type="button"
            class="btn btn-secondary"> --Inicio--
            <img src="/IMG/home.png" alt="" width="30" height="30" class="raster">
        </a>
        <a href='<?php echo "/empresa/perfil2.php?Nempresa=$Nempresa&id=$id"; ?>' type='button'
            class='btn btn-secondary'>--Cuenta--
            <img src='/IMG/perfil.png' alt='' width='30' height='30' class='raster'>
        </a>
    </div>
</body>

</html>