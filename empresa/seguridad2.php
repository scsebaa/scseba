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
<script type="text/javascript">
    function mostrarPassword() {
        var cambio = document.getElementById("txtPassword");
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }

    $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#ShowPassword').click(function () {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
</script>

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
    <div>
        <form class='cuadrogeneral' action='<?php echo "seguridad_perfil2.php?id=$id&Nempresa=$Nempresa"; ?>'
            method='post'>

            <strong>
                <h1 class='bg-dark'>Cuenta</h1>
            </strong>

            <table>
                <tr>
                    <td>
                        <div class='centrar1'><img src='/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png' alt width='150' height='150'></div>
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
                            <h4><strong>Seguridad</strong></h4>
                        </div>
                    </TD>
                    <td>
                        <div class='cuadro5'><img src='/IMG/seguridad.png' alt width='75' height='75'>
                        </div>
                    </td>
                </TR>
            </TABLE>
            <br>
            <br>
            <table>
                <tr>
                    <td>
                        <div class=' cuadro6 negro'>
                            <h4><strong>Usuario</strong></h4>
                        </div>
                    </td>
                    <td>
                        <?php echo "<input type='Text' name='Nombre'class='form-control'  value='$mostrar[usuario]' placeholder='su nombre...'> "; ?>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class=' cuadro6 negro'>
                            <h4><strong>Empresa</strong></h4>
                        </div>
                    </td>
                    <td><br>
                        <?php echo "<input type='Text' name='Empresa'class='form-control'  value='$mostrar[N_negocio]' placeholder='su Empresa...'> "; ?>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class='cuadro6'>
                            <h4><strong>Correo</strong></h4>
                        </div>
                    </td>
                    <td><br>
                        <?php echo "<input type='email' name='Correo'class='form-control'  value='$mostrar[email]' placeholder='su correo...'> "; ?>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class='cuadro6 negro'>
                            <h4><strong>Teléfono</strong></h4>
                        </div>
                    </td>
                    <td><br>
                        <?php echo "<input type='Text' name='Teléfono'class='form-control'  value='$mostrar[telefono]' placeholder='su telefono...'> "; ?>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class='cuadro6 negro'>
                            <h4><strong>Contraseña</strong></h4>
                        </div>
                    </td>
                    <td><br>
                        <form id="form1">
                            <div class="col-md-6">
                            </div>
                            <div class="input-group">
                                <input type='Password' ID='txtPassword' name='Contraseña' class='form-control'
                                    value='<?php echo "$mostrar[contraseña]" ?>' placeholder='contraseña...'>
                                <button id='show_password' class='btn btn-primary' type='button'
                                    onclick='mostrarPassword()'> <span class='fa fa-eye-slash icon'></span>
                                    <svg id=clickme width=28 height=24 xmlns='http://www.w3.org/2000/svg'
                                        viewBox='0 0 576 512'>
                                        <path
                                            d='M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z' />
                                    </svg>
                                </button>
                                </input>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <div class='cuadro6 negro'>
                            <h4><strong>Direccion</strong></h4>
                        </div>
                    </td>
                    <td><br>
                        <div class='cuadro7 negro'>
                            <?php echo "<input type='Text' name='Mascota'class='form-control'  value='$mostrar[D_negocio]' placeholder='tipo de mascota...'> "; ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br>
            <input class='btn btn-success cuadro9' type='submit' value='Guardar'></input>
        </form>
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