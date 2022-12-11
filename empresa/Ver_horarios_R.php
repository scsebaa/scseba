<?php

$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];

$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
$conn = mysqli_connect($server, $user, $password, $database);
$sql = "SELECT*FROM registroatencion WHERE empresa_cliente='$id'";
$result = mysqli_query($conn, $sql);

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>productos</title>
</head>

<body>
    <div class='cuadrogeneral'>

        <table>
            <tr>
                <td>
                    <div class='centrar1 p-1'><img
                            src='/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png' alt width='150'
                            height='150'></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class='centrar1 cuadro8 negro'>
                        <h3><strong>
                                <?php echo $Nempresa ?>
                            </strong></h3>
                    </div>
                </td>
            </tr>
        </table>
            
        <br>
        <h1 class="bg card text-dark"><strong> Horas registradas para atender</strong></h1>
        <?php while($mostrar = mysqli_fetch_array($result)){ ?>
       
        <table class= >
            <div class="card  background-color:Orange" style="background-color:  rgb(242, 243, 239);">
                <a class="btn text-success negro" data-bs-toggle="collapse"
                    href="#collapseOne<?php echo $mostrar['id'] ?>">
                    <div class="card-header ">
                        <img width="90" height="100" class="izqu" src="/IMG/<?php echo "$mostrar[servicio]"; ?>.png">
                        <h4>
                            <?php echo $mostrar['servicio'] ?>
                        </h4>
                        <strong>Usuario: </strong>
                        <?php echo $mostrar['nombre'] ?>
                        <h5>
                            <strong>Fecha: </strong>
                            <?php echo $mostrar['fecha'] ?>
                        </h5>
                        <strong>Hora:</strong>
                        <?php echo $mostrar['hora_inicio'] ?> a
                        <?php echo $mostrar['hora_fin'] ?>

                    </div>
                </a>
                <div id="collapseOne<?php echo $mostrar['id'] ?>" class="collapse  text-success"
                    data-bs-parent="#accordion">
                    <div class="card-body ">
                        <h4>Descripcion del usuario</h4>
                        <?php echo $mostrar['Descripcion'] ?>


                    </div>
                    <h5><a class="btn izqu" href="<?php echo"/empresa/borrar1.php?Pid=$mostrar[id]&id=$id&Nempresa=$Nempresa" ;?>"><img width="30" height="30" class="" src="/IMG/x.png"></h5></a>
                </div>

            </div>

        </table><h3></h3>
        <?php } ?>


    </div>
    </div>


    </div>
    </div>
    <div id="inferior" class="btn-group btn-group-lg">

        <a href="<?php echo "/empresa/elegir_seccion.php?Nempresa=$Nempresa&id=$id"; ?>" type="button"
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