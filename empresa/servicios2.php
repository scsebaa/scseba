<?php

$Nempresa = $_GET['Nempresa'];
$id = $_GET['id'];

$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>productos</title>
</head>

<body>
    <div class='cuadrogeneral'>

        <table>
            <tr>
                <td>
                    <div class='centrar1'><img src='/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png'
                            alt width='150' height='150'></div>
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


        <TABLE class='centrar2'>
            <TR>
                <TD>
                    <div class='cuadro4 negro'><br>
                        <h4><strong>Servicios</strong></h4>
                    </div>
                </TD>
                <td>
                    <div class='cuadro5'><img src='/IMG/servicios.png' alt width='75' height='75'>
                    </div>
                </td>
            </TR>
        </TABLE><br><br>
        <div class="card cuadro2 background-color:Orange" style="background-color:  rgb(242, 243, 239);">
            <a class="btn text-success negro" data-bs-toggle="collapse" href="#collapseOne">
                <div class="card-header ">
                    <h4 class="negro">
                        Seleccione los servicios que usted ofrece
                    </h4>
                </div>
            </a>


            <form id="collapseOne" action='<?php echo "servicios22.php?id=$id&Nempresa=$Nempresa"; ?>' method='post'
                class="collapse  text-success" data-bs-parent="#accordion">
                <div class="">
                    <table>
                        <tr><br>
                            <td>
                                <div class="align-items-lg-center">
                                    <div class='cuadro5'>
                                        <img src='/IMG/Consultas a Domicilio.png' alt width='75' height='75'>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label" for="customCheck1">Consultas a
                                            Domicilio</label>
                                        <input type="checkbox" name="ConsultasaDomicilio" value="Consultas a Domicilio"
                                            class="custom-control-input" id="customCheck1">

                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="align-items-lg-center">
                                    <div class='cuadro5 border-1'>
                                        <img src='/IMG/Exámenes y Hospitalización.png' alt width='75' height='75'>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label " for="customCheck2">Exámenes y
                                            Hospitalización</label>
                                        <input type="checkbox" name="ExámenesyHospitalización"
                                            value="Exámenes y Hospitalización" class="custom-control-input"
                                            id="customCheck2">

                                    </div>
                            </td>
                            <td>
                                <div class="align-items-lg-center">
                                    <div class='cuadro5'>
                                        <img src='/IMG/Urgencias y Cirugías.png' alt width='75' height='75'>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label" for="customCheck3">Urgencias y
                                            Cirugías</label>
                                        <input type="checkbox" name="UrgenciasyCirugías" value="Urgencias y Cirugías"
                                            class="custom-control-input" id="customCheck3">

                                    </div>
                            </td>
                        </tr>

                        <tr>
                            <td><br>
                                <div class="align-items-lg-center">
                                    <div class='cuadro5'>
                                        <img src='/IMG/Castración y Esterilización.png' alt width='75' height='75'>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label" for="customCheck4">Castración y
                                            Esterilización</label>
                                        <input type="checkbox" name="CastraciónyEsterilización"
                                            value="Castración y Esterilización" class="custom-control-input"
                                            id="customCheck4">

                                    </div>
                            </td>

                            <td><br>
                                <div class="align-items-lg-center">
                                    <div class='cuadro5'>
                                        <img src='/IMG/Traslado de Pacientes.png' alt width='75' height='75'>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label" for="customCheck5">Traslado de
                                            Pacientes</label>
                                        <input type="checkbox" name="TrasladodePacientes" value="Traslado de Pacientes"
                                            class="custom-control-input" id="customCheck5">

                                    </div>
                            </td>
                            <td><br>
                                <div class="align-items-lg-center">
                                    <div class='cuadro5'>
                                        <img src='/IMG/Vacunas y antiparasitarios.png' alt width='75' height='75'>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label" for="customCheck6">Vacunas y
                                            antiparasitarios</label>
                                        <input type="checkbox" name="Vacunasyantiparasitarios"
                                            value="Vacunas y antiparasitarios" class="custom-control-input"
                                            id="customCheck6">

                                    </div>
                            </td>
                        </tr>
                    </table>
                    <br>

                </div>
                <input class='btn btn-success cuadro9' type='submit' value='Guardar'></input>
            </form><br>
        </div><br>
        <div class="card cuadro2 background-color:Orange" style="background-color:  rgb(242, 243, 239);">
            <a class="btn text-success negro" data-bs-toggle="collapse" href="#collapseOne2">
                <div class="card-header ">
                    <h4 class="negro">
                        Seleccione su horario de atención del dia
                    </h4>
                </div>
            </a>


            <form id="collapseOne2" action='<?php echo "servicios222.php?id=$id&Nempresa=$Nempresa"; ?>' method='post'
                class="collapse  text-success" data-bs-parent="#accordion">
                <div class="">
                    <table>
                        <tr><br>
                            <label class='negro'><strong>Días de trabajo en la Semana</strong></label>
                            <select name='diasemana' class='form-select'>
                            
                                <option>lunes a Viernes</option>
                                <option>Sabado y Domingo</option>
                                <option>Lunes a Domingo</option>
                            </select>
                        </tr>
                        <tr><br>
                            <label class='negro'><strong>Cuanto tiempo tardas por cliente</strong></label>
                            <select name='horas' class='form-select'>
                            
                                <option>1:00:00</option>
                                <option>2:00:00</option>
                                <option>00:30:00</option>
                            </select>
                        </tr>
                        <tr>
                            <td>
                                <div class="align-items-lg-center">
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label">Hora de entrada:</label>
                                        <input type="time" name="entrada" required>

                                    </div>
                            </td>
                            <td>
                                <div class="align-items-lg-center">
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label">Hora de salida:</label>
                                        <input type="time" name="salida" required>

                                    </div>
                            </td><br>

                        </tr>

                    </table>

                    <br>

                </div>
                <input class='btn btn-success cuadro9' type='submit' value='Guardar'></input>
            </form><br>
        </div>
    </div>


    </div>
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