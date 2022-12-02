<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);

$id = $_REQUEST["id"];

$sqlEdit = "SELECT * FROM material WHERE id_material = '$id'";

$queryEdit = mysqli_query($connect, $sqlEdit);

$fila = mysqli_fetch_array($queryEdit);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />

</head>
<link rel="shortcut icon" href="./assets/libros.png" type="image/x-icon" />
<script type="module" src="material.js" defer></script>
<title>Biblioteca</title>
</head>

<body>
  <header class="header">

    <img class="header_img" src="./assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />


    <nav class="header_nav">
      <!-- <a href="../usuario/usuario.php"><i class="fa fa-users"></i> Usuario</a> -->
      <a href="../unlogin.php"><i class="	fa fa-sign-out">Cerrar Sesion</i></a>
      <a class="header_nav--active" href="material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" method="post" id="form_material" action="./material/editMaterial.php">
      <label for="">ID material</label><br />
      <input required id="inp_material-id" name="inp_material-id" class="containerPrincipal_form--input" type="number"
        readonly placeholder="ID del material" minlength="8" maxlength="8" size="8"
        value="<?php echo $fila["id_material"] ?>" /><br />
      <label for="">Descripcion</label><br />
      <select required class="containerPrincipal_form--select" name="inp_material-desc" id="inp_material-desc"
        value="<?php echo $fila["descripcion"] ?>">
        <option value="" selected>--Selecciona la descripcion--</option>
        <option value="Copia">Copia</option>
        <option value="Original">Original</option>
      </select><br />
      <label for="">Fecha</label><br />
      <input required id="inp_material-fecha" name="inp_material-fecha" class="containerPrincipal_form--input"
        type="date" placeholder="Apellido del nuevo usuario" value="<?php echo $fila["fecha"] ?>" /><br />
      <button type="submit" id="btn-material" class="containerPrincipal_form--btn">
        Editar
      </button>
    </form>
  </main>
  <div class="">
    <p id="return-material"></p>
  </div>

  <style>
    .main_table-material {
      width: 100%;
    }

    .table-material,
    .tr-material,
    .th-material,
    .td-material {
      border-collapse: collapse;
      border: 1px rgba(10, 10, 10, .4)solid;


    }

    .table-material,
    .th-material,
    .td-material {
      text-align: center;
    }

    .table-material {
      margin: 0 auto;
      width: 95%;
    }


    . td button .btn-materialDelete:hover {
      background-color: red;
    }

    .td-material {
      background-color: rgb(77, 245, 241);
    }
  </style>


</body>

</html>