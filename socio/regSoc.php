<?php

$inpSocioId = $_POST['inp_socio-idEstudiante'];
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
  $pdo = $conexion->prepare("INSERT INTO estudiante VALUES (?,?,?,?,?,?,?,?,?)");
  $pdo->bindParam(1, $inpSocioId);
  $pdo->bindParam(2, $inpSocioDni);
  $pdo->bindParam(3, $inpSocioName);
  $pdo->bindParam(4, $inpSocioCarrera);
  $pdo->bindParam(5, $inpSocioAddress);
  $pdo->bindParam(6, $inpSocioTel);
  $pdo->bindParam(7, $inpSocioEmail);
  $pdo->bindParam(8, $inpSocioCondicion);
  $pdo->bindParam(9, $inpSocioLastName);
  $pdo->execute() or die(print($pdo->errorInfo()));
  // header("Location:socio.php?success= Usuario añadido");
  echo json_encode("true");
} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}