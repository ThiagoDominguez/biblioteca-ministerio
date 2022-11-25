<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="assets/libros.png" type="image/x-icon" />
  <script src="script.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>
  <header class="header">
    <img class="header_img" src="./assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
  </header>
  <?php

  if (isset($_GET["error"])) {
  ?>
  <p class="error-login">

    <?php
    echo $_GET["error"];

    ?>
  </p>
  <?php

  }


  ?>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" method="post" id="form_inicioSesion" action="login.php">
      <h1>Inicia Sesion</h1>
      <label for="">Email</label><br />
      <input class="containerPrincipal_form--input dni" type="email" name="inp_inicioSesion-email"
        placeholder="Ingresa tu email" id="inp_inicioSesion-email" /><br />
      <label for="">Contraseña</label><br />
      <input class="containerPrincipal_form--input" name="inp_inicioSesion-pass" type="password"
        placeholder="Ingresa tu contraseña" id="inp_inicioSesion-pass" /><br />
      <button id="btn-inicioSesion" type="submit" class="containerPrincipal_form--btn">
        Iniciar Sesion
      </button>
      <p class="containerPrincipal-parrafo">
        ¿No tienes una cuenta?
      </p>
      <a href="index.php" class="containerPrincipal-link">Registrate</a>
    </form>
  </main>
</body>


</html>