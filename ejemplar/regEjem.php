<?php

$inpEjemplarIdEstado = $_POST["inp_ejemplar-idEstado"];
$inpEjemplarDesc = $_POST["inp_ejemplar-desc"];
$inpEjemplarCodMat = $_POST["inp_ejemplar-codigoMaterial"];
$inpEjemplarStock = $_POST["inp_ejemplar-stock"];

try {
  $conexion = new PDO("mysql:host=localhost;port=3306;dbname=biblioteca", "Thiago", "2001");
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $pdo = $conexion->prepare("INSERT INTO ejemplar VALUES(?,?,?,?)");

  $pdo->bindParam(1, $inpEjemplarIdEstado);
  $pdo->bindParam(2, $inpEjemplarDesc);
  $pdo->bindParam(3, $inpEjemplarCodMat);
  $pdo->bindParam(4, $inpEjemplarStock);
  $pdo->execute() or die(print($pdo->errorInfo()));

  echo json_encode("true");

} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}