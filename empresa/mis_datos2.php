<?php
$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];

$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
include("db.php");
$conn = mysqli_connect($server, $user, $password, $database);
$sql = "SELECT * from empresa WHERE id=$id";
$result = mysqli_query($conn, $sql);
$mostrar = mysqli_fetch_array($result);

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
    <div class="Caja">
        <div class="cuadrogeneral" method="post" enctype="multipart/form-data">
            <strong>
                <h1 class="bg-dark  ">Cuenta</h1>
            </strong><br>
            <br>
            <table>
                <tr>
                    <td>
                        <div class="centrar1 "><img src="/IMG/foto_perfil.png" alt width="150" height="150"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo "<div class='centrar1 cuadro8 negro'><h3><strong>$Nempresa</strong></h3></div>"; ?>
                    </td>
                </tr>
            </table>

            <br>
            <TABLE class="centrar2">
                <TR>
                    <TD>
                        <div class="cuadro4 negro "><br>
                            <h4><strong>Mis datos</strong></h4>
                        </div>
                    </TD>
                    <td>
                        <div class="cuadro5"><img src="/IMG/Foto_datos.png" alt width="80" height="80">
                        </div>
                    </td>
                </TR>
            </TABLE><br>

            <br>
            <table>
                <tr>
                    <td>
                        <div class="cuadro6 negro">
                            <h4>Nombre</h4>
                        </div>
                    </td>
                    <td>
                        <div class="cuadro7 negro">
                           <div class="col-sm-10">
                           <strong><input type="text" readonly class="form-control-plaintext" id="static"
                                     value="<?php echo $Nempresa ?>"></strong>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class="cuadro6 negro">
                            <h4>Correo</h4>
                        </div>
                    </td>
                    <td><br>
                        <div class="cuadro7 negro">                            
                            <div class="col-sm-10">
                           <strong><input type="text" readonly class="form-control-plaintext" id="static"
                                     value="<?php echo $mostrar['email'] ?>"></strong>
                            </div>                           
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class="cuadro6 negro">
                            <h4>telefono</h4>
                        </div>
                    </td>
                    <td><br>
                        <div class="cuadro7 negro">                         
                            <div class="col-sm-10">
                           <strong><input type="text" readonly class="form-control-plaintext" id="static"
                                     value="<?php echo $mostrar['telefono'] ?>"></strong>
                            </div>                          
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class="cuadro6 negro">
                            <h4>Direccion</h4>
                        </div>
                    </td>
                    <td><br>
                    <div class="cuadro7 negro">                         
                            <div class="col-sm-10">
                           <strong><input type= "tel" readonly class="form-control-plaintext" id="static"
                                     value="<?php echo $mostrar['D_negocio'] ?>"></strong>
                            </div>                          
                        </div>
                    </td>
                </tr>

            </table>


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