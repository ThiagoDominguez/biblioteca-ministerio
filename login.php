<?php

session_start();
$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


if (isset($_POST["inp_inicioSesion-email"]) && isset($_POST["inp_inicioSesion-pass"])) {
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }


  $email = validate($_POST["inp_inicioSesion-email"]);
  $password = validate($_POST["inp_inicioSesion-pass"]);
  if (empty($email)) {
    header("Location:inicioSesion.php?error = 'El email es requerido'");
    exit();
  } else if (empty($password)) {
    header("Location:inicioSesion.php?error = 'La contraseña es requerida'");
    exit();
  } else {
    // $clave = md5($password);

    $sql = "SELECT * FROM login WHERE Email_login = '$email'AND Pass_login = '$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row["Email_login"] === $email && $row["Pass_login"] === $password) {
        $_SESSION["Email_login"] = $row["Email_login"];
        $_SESSION["Pass_login"] = $row["Pass_login"];
        header("Location:./socio/socio.php");
        exit();

      } else {
        header("Location:inicioSesion.php?error =El email o la contraseña son incorrectos, inténtelo de nuevo");
        exit();
      }

    } else {
      header("Location:inicioSesion.php?error=El email o la contraseña son incorrectos, inténtelo de nuevo");
      exit();
    }
  }
} else {
  header("Location:inicioSesion.php");
  exit();
}



?>