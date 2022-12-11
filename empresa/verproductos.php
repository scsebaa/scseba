<?php
$id = $_GET['id'];
$id1 = $id;
$Nempresa = $_GET['Nempresa'];
$server = "mysql";
$user = "root";
$password = "pass";
$database = "login";
include("db.php");
$conn = mysqli_connect($server, $user, $password, $database);
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

  <div class='cuadrogeneral' action="registro_productos.php" method="post" enctype="multipart/form-data">

    <img class="izqu" src="/IMG/Image 21-2022-10-14+01_49_32.790874/Raster_9/assets/Raster.png" alt="" width="95"
      height="95">
    <div class="cuadro_1 negro text-success">
      <h2>
        <?php echo $Nempresa ?>
      </h2>
    </div><br>
    <strong>
      <h1 class="bg-dark animate__animated animate__backInLeft">Mis Productos </h1>
    </strong>
    <?php
    $sql = "SELECT * from productos WHERE id_empresa=$id";

    $result = mysqli_query($conn, $sql);

    while ($mostrar = mysqli_fetch_array($result)) {
      $usuario = $mostrar['id_empresa'];
    ?>

    <div class="card cuadro2">
      <a class="btn text-success negro" data-bs-toggle="collapse" href="#collapseOne<?php echo $mostrar['id'] ?>">
        <div class="card-header ">
          <img width="150" height="100" class="izqu"
            src="data:image/png;base;base64,<?php echo base64_encode($mostrar['imagen1']); ?>">

          <h4 class="negro">
            <?php echo $mostrar['Categoria'] ?>
          </h4>
          <?php echo $mostrar['N_producto'] ?>

          <?php echo $mostrar['N_negocio'] ?>
          <h3 class="negro">$
            <?php echo $mostrar['Precio'] ?>
            <div class="circulo22">
              <?php echo $mostrar['descuento'] ?>%
            </div>
          </h3>

          <?php
      $sql2 = "SELECT * from empresa where id='$usuario'";

      $result2 = mysqli_query($conn, $sql2);
      $mostrar2 = mysqli_fetch_array($result2)

            ?>

        </div>
      </a>

      <div id="collapseOne<?php echo $mostrar['id'] ?>" class="collapse  text-success" data-bs-parent="#accordion">
        <div class="card-body ">
          <?php echo $mostrar['Descripción'] ?>
          <?php $id = $mostrar['id']; ?>
          <a href='<?php echo "/empresa/modificarP.php?Nempresa=$Nempresa&id=$id"; ?> ' class='btn text-success'>
            <img src='/IMG/confi.png' alt='' width='40' height='30' class='raster'>
          </a>

        </div>
      </div>
    </div>
    <h2></h2>
    <?php
    }
    ?>

  </div>

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>