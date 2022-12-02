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
      if (isset($_GET["success"])) {
      ?>
  <p class="success-registro">
    <?php echo $_GET["success"] ?>
  </p>
  <?php
  
      }
      ?>
  <?php
      if (isset($_GET["error"])) {
      ?>
  <p class="error-login">
    <?php echo $_GET["error"] ?>
  </p>
  <?php
  
      }
  
  
      ?>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" method="post" id="form_registro" action="registro.php">
      <h1>Registrate</h1>
      <label for="">Email</label><br />
      <input class="containerPrincipal_form--input dni" type="email" name="inp_registro-email"
        placeholder="Ingresa tu email" id="inp_registro-email" required /><br />
      <label for="">Confirma Email</label><br />
      <input class="containerPrincipal_form--input" name="inp_registro-confEmail" type="email"
        placeholder=" Confirma tu email" id="inp_registro-confEmail" required /><br />
      <label for="">Contraseña</label><br />
      <input class="containerPrincipal_form--input" name="inp_registro-pass" type="password"
        placeholder="Ingresa tu contraseña" id="inp_registro-pass" required /><br />
      <label for="">Confirmar Contraseña</label><br />
      <input class="containerPrincipal_form--input" type="password" name="inp_registro-confPass"
        placeholder="Confirma tu contraseña" id="inp_registro-confPass" required /><br />
      <button id="btn-registro" type="submit" class="containerPrincipal_form--btn">
        Registrarse
      </button>
      <p class="containerPrincipal-parrafo">
        ¿Ya tienes una cuenta?
      </p>
      <a href="inicioSesion.php" class="containerPrincipal-link">Inicia Sesion</a>
    </form>
  </main>
</body>

</html>