<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);

$id = $_REQUEST["id"];

$sqlEdit = "SELECT * FROM estudiante WHERE idestudiante = '$id'";

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
  <script src="socio.js" defer></script>
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
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a class="header_nav--active" href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" id="form_socio" method="post" action="./socio/editSocio.php">
      <label for="">Codigo</label><br />
      <input id="inp_socio-cod" required class="containerPrincipal_form--input dni" type="number"
        placeholder="Codigo del  socio" minlength="8" maxlength="8" size="8" name="inp_socio-cod" readonly
        value="<?php echo $fila["codigo"] ?>" /><br />
      <label for="">DNI</label><br />
      <input id="inp_socio-dni" required class="containerPrincipal_form--input dni" type="number"
        placeholder="DNI del  socio" minlength="8" maxlength="8" size="8" name="inp_socio-dni"
        value="<?php echo $fila["dni"] ?>" /><br />
      <label for="">Nombre</label><br />
      <input id="inp_socio-name" required class="containerPrincipal_form--input" type="text"
        placeholder="Nombre del  socio" name="inp_socio-name" value="<?php echo $fila["nombre"] ?>" /><br />
      <label for="">Apellido</label><br />
      <input id="inp_socio-lastname" required class="containerPrincipal_form--input" type="text"
        placeholder="Apellido del  socio" name="inp_socio-lastname" value="<?php echo $fila["apellido"] ?>" /><br />
      <label for="">Carrera</label><br />
      <input id="inp_socio-carrera" required class="containerPrincipal_form--input" type="text"
        placeholder="Carrera del  socio" name="inp_socio-carrera" value="<?php echo $fila["carrera"] ?>" /><br />
      <label for="">Direccion</label><br />
      <input id="inp_socio-address" required class="containerPrincipal_form--input" type="text"
        placeholder="Direccion del socio" name="inp_socio-address" value="<?php echo $fila["direccion"] ?>" /><br />
      <label for="">Telefono</label><br />
      <input id="inp_socio-tel" required class="containerPrincipal_form--input" type="tel"
        placeholder="Numero del socio" name="inp_socio-tel" value="<?php echo $fila["telefono"] ?>" /><br />
      <label for="">Email</label><br />
      <input id="inp_socio-email" required class="containerPrincipal_form--input" type="email" name="inp_socio-email"
        placeholder="Email del socio" value="<?php echo $fila["email"] ?>" />
      <label for="">Condicion</label><br />
      <input id="inp_socio-condicion" required class="containerPrincipal_form--input" type="text"
        name="inp_socio-condicion" placeholder="Condicion del socio" value="<?php echo $fila["condicion"] ?>" />
      <button id="btn-socio" type="submit" class="containerPrincipal_form--btn">
        Editar
      </button>
    </form>
  </main>
  <div>
    <p id="return-socio"></p>
  </div>
</body>

</html>