<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);
if (isset($_POST["inp_registro-email"]) && isset($_POST["inp_registro-confEmail"]) && isset($_POST["inp_registro-pass"]) && isset($_POST["inp_registro-confPass"])) {
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }


  $email = validate($_POST["inp_registro-email"]);
  $confEmail = validate($_POST["inp_registro-confEmail"]);
  $password = validate($_POST["inp_registro-pass"]);
  $confPassword = validate($_POST["inp_registro-confPass"]);

  $datosRegistro = "Email=" . $email . "&confirmEmail=" . $confEmail . "&Pass=" . $password . "&confirmPass=" . $confPassword;
  if (empty($email)) {
    header("Location:index.php?error= El email es requerido");
    exit();
  } else if (empty($password)) {
    header("Location:index.php?error= La contraseña es requerida");
    exit();
  } else if (empty($confEmail)) {
    header("Location:index.php?error= La confirmacion de email es requerida");
    exit();
  } else if (empty($confPassword)) {
    header("Location:index.php?error= La confirmacion de contraseña es requerida");
    exit();
  } else if ($password !== $confPassword) {
    header("Location:index.php?error= La contraseñas  son diferentes");
    exit();
  } else if ($email !== $confEmail) {
    header("Location:index.php?error= Los emails  son diferentes");
    exit();
  } else {

    $sql = "SELECT * FROM login WHERE Email_login = '$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location:index.php?error= El email ya existe");
      exit();



    } else {
      $sql2 = "INSERT INTO login(Email_login,Pass_login)VALUES('$email','$password')";
      $query = mysqli_query($connect, $sql2);
      if ($query) {
        header("Location:index.php?success= Usuario Creado");
        exit();

      } else {
        header("Location:index.php?error= Ocurrió un error");
        exit();
      }
    }
  }
} else {
  header("Location:index.php");
  exit();
}



?>