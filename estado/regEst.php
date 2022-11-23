<?php

$inpEstadoId = $_POST["inp_estado-id"];
$inpEstadoDesc = $_POST["inp_estado-desc"];
$inpEstadoCodMat = $_POST["inp_estado-codigoMaterial"];



try {
  $conexion = new PDO("mysql:host=localhost;port=3306;dbname=biblioteca", "Thiago", "2001");
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $pdo = $conexion->prepare("INSERT INTO estado VALUES(?,?,?)");
  $pdo->bindParam(1, $inpEstadoId);
  $pdo->bindParam(2, $inpEstadoDesc);
  $pdo->bindParam(3, $inpEstadoCodMat);
  $pdo->execute() or die(print($pdo->errorInfo()));
  // $pdo->execute() or die();
  $bd = "biblioteca";
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass);

  mysqli_select_db($connect, $bd);
  $query = mysqli_query($connect, "SELECT *FROM estado");

  echo json_encode("true");






} catch (PDOException $error) {
  $error->getMessage();
  die();
}