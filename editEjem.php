<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);

$id = $_REQUEST["id"];

$sqlEdit = "SELECT * FROM ejemplar WHERE id_estado = '$id'";

$queryEdit = mysqli_query($connect, $sqlEdit);

$fila = mysqli_fetch_array($queryEdit);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="./assets/libros.png" type="image/x-icon" />
  <script src="../ejemplar/ejemplar.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>
  <header class="header">
    <a href="../index.html">
      <img class="header_img" src="./assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <!-- <a href="../usuario/usuario.php"><i class="fa fa-users"></i> Usuario</a> -->
      <a href="../unlogin.php"><i class="	fa fa-sign-out">Cerrar Sesion</i></a>
      <a href="../material/material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a class="header_nav--active" href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <!-- <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a> -->
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" id="form_ejemplar" method="post" action="./ejemplar/editEjemplar.php">
      <label for="">ID Estado</label><br />
      <input class="containerPrincipal_form--input dni" type="number" name="inp_ejemplar-idEstado"
        placeholder="ID del estado" minlength="8" maxlength="8" size="8" id="inp_ejemplar-idEstado"
        value="<?php echo $fila["id_estado"] ?>" readonly /><br />
      <label for="">Descripcion</label><br />
      <input class="containerPrincipal_form--input" name="inp_ejemplar-desc" type="text" placeholder="Descripcion"
        id="inp_ejemplar-desc" value="<?php echo $fila["descripcion"] ?>" /><br />
      <label for="">Codigo material</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_ejemplar-codigoMaterial"
        placeholder="Codigo de material" id="inp_ejemplar-codigoMaterial"
        value="<?php echo $fila["cod_material"] ?>" /><br />
      <label for="">Stock</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_ejemplar-stock"
        placeholder="Cantidad en Stock" id="inp_ejemplar-stock" value="<?php echo $fila["stock"] ?>" /><br />
      <button id="btn-ejemplar" type="submit" class="containerPrincipal_form--btn">
        Editar
      </button>
    </form>
  </main>
  <div>
    <p id="return-ejemplar"></p>
  </div>

</body>

</html>