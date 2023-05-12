<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);

$id = $_REQUEST["id"];

$sqlEdit = "SELECT * FROM prestamo WHERE id_prestamo = '$id'";

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
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
  <script src="../prestamo/prestamo.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>
  <!-- <header class="header">
    <a href="../index.html">
      <img class="header_img" src="./assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <a href="../usuario/usuario.php"><i class="fa fa-users"></i> Usuario</a>
      <a href="../unlogin.php"><i class="	fa fa-sign-out">Cerrar Sesion</i></a>
      <a href="../material/material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a class="header_nav--active" href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header> -->
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" method="post" id="form_prestamo" action="./prestamo/editPrestamo.php">
      <label for="">ID prestamo</label>
      <input required id="inp_prestamo-id" name="inp_prestamo-id" type="number" placeholder="ID del Prestamo"
        class="containerPrincipal_form--input" readonly value="<?php echo $fila["id_prestamo"] ?>" />
      <label for="">DNI</label><br />
      <input required id="inp_prestamo-dni" name="inp_prestamo-dni" class="containerPrincipal_form--input dni"
        type="number" placeholder="DNI del socio" maxlength="8" value="<?php echo $fila["id_socio"] ?>" /><br />
      <label for="">ID del material</label><br />
      <input required id="inp_prestamo-idMaterial" name="inp_prestamo-idMaterial" class="containerPrincipal_form--input"
        type="text" placeholder="ID del material" value="<?php echo $fila["id_material"] ?>" /><br />
      <label for="">Fecha de salida</label><br />
      <input required id="inp_prestamo-fechaSalida" name="inp_prestamo-fechaSalida"
        class="containerPrincipal_form--input" type="date" value="<?php echo $fila["fecha_salida"] ?>" /><br />
      <label for="">Fecha de devolucion</label><br />
      <input required id="inp_prestamo-fechaDevolucion" name="inp_prestamo-fechaDevolucion"
        class="containerPrincipal_form--input" type="date" value="<?php echo $fila["fecha_devolucion"] ?>" /><br />
      <button id="btn-prestamo" type="submit" class="containerPrincipal_form--btn">
        Editar
      </button>
    </form>
  </main>
  <div>
    <p id="return-prestamo"></p>
  </div>

</body>

</html>