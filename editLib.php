<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);

$id = $_REQUEST["id"];

$sqlEdit = "SELECT * FROM libro WHERE num_inventario = '$id'";

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
  <script src="libro.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>
  <!-- <header class="header">
    <a href="../index.html">
      <img class="header_img" src="./assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <a href="../unlogin.php"><i class="	fa fa-sign-out">Cerrar Sesion</i></a>
      <a href="../material/material.php"><i class="fa fa-list"></i> Material</a>
      <a class="header_nav--active" href="libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.html"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header> -->
  <main class="containerPrincipal">
    <input type="number" hidden name="id" value="<?php echo $fila["num_inventario"] ?>">
    <form class="containerPrincipal_form" method="post" id="form_libro" action="./libro/editLibro.php">
      <label for="">Numero de inventario</label><br />
      <input class="containerPrincipal_form--input dni" type="number" name="inp_libro-numeroInventario"
        placeholder="Numero del inventario" minlength="8" maxlength="8" size="8"
        value="<?php echo $fila["num_inventario"] ?>" id="inp_libro-numeroInventario" /><br />
      <label for="">Titulo</label><br />
      <input class="containerPrincipal_form--input" name="inp_libro-titulo" type="text" placeholder=" Titulo del libro"
        value="<?php echo $fila["titulo"] ?>" id="inp_libro-titulo" /><br />
      <label for="">Autor</label><br />
      <input class="containerPrincipal_form--input" name="inp_libro-autor" type="text" placeholder="Nombre del autor"
        id="inp_libro-autor" value="<?php echo $fila["iniciales_autor"] ?>" /><br />
      <label for="">Codigo de inventario</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_libro-codigoInventario"
        placeholder="Codigo de inventario" id="inp_libro-codigoInventario"
        value="<?php echo $fila["cod_inventario"] ?>" /><br />
      <label for="">Codigo de material</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_libro-codigoMaterial"
        placeholder="Codigo del material" id="inp_libro-codigoMaterial"
        value="<?php echo $fila["cod_material"] ?>" /><br />
      <button id="btn-libro" type="submit" class="containerPrincipal_form--btn">
        Editar
      </button>
    </form>
  </main>

</body>

</html>