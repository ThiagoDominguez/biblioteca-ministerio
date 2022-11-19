<?php

$inpSocioCod = $_POST['inp_socio-cod'];
$inpSocioDni = $_POST['inp_socio-dni'];
$inpSocioName = $_POST['inp_socio-name'];
$inpSocioLastName = $_POST['inp_socio-lastname'];
$inpSocioCarrera = $_POST['inp_socio-carrera'];
$inpSocioAddress = $_POST['inp_socio-address'];
$inpSocioTel = $_POST['inp_socio-tel'];
$inpSocioEmail = $_POST['inp_socio-email'];
$inpSocioCondicion = $_POST['inp_socio-condicion'];

try {
  $conexion = new PDO('mysql:host=localhost;port=3306;dbname=biblioteca', 'Thiago', '2001');
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $pdo = $conexion->prepare("INSERT INTO estudiante(codigo,dni,nombre,apellido,carrera,direccion,telefono,email,condicion)VALUES (?,?,?,?,?,?,?,?,?)");
  $pdo->bindParam(1, $inpSocioCod);
  $pdo->bindParam(2, $inpSocioDni);
  $pdo->bindParam(3, $inpSocioName);
  $pdo->bindParam(4, $inpSocioLastName);
  $pdo->bindParam(5, $inpSocioCarrera);
  $pdo->bindParam(6, $inpSocioAddress);
  $pdo->bindParam(7, $inpSocioTel);
  $pdo->bindParam(8, $inpSocioEmail);
  $pdo->bindParam(9, $inpSocioCondicion);
  $pdo->execute() or die(print($pdo->errorInfo()));

  echo json_encode("true");
} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}