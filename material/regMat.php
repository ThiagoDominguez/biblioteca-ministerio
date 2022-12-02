<?php


$inpMaterialId = $_POST["inp_material-id"];
$inpMaterialDesc = $_POST["inp_material-desc"];
$inpMaterialFecha = $_POST["inp_material-fecha"];


try {
  $conexion = new PDO("mysql:host=localhost;port=3306;dbname=biblioteca", "Thiago", "2001");
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $pdo = $conexion->prepare("INSERT INTO material (id_material,descripcion,fecha)VALUES(?,?,?)");
  $pdo->bindParam(1, $inpMaterialId);
  $pdo->bindParam(2, $inpMaterialDesc);
  $pdo->bindParam(3, $inpMaterialFecha);
  $pdo->execute() or die(print($pdo->errorInfo()));

  echo json_encode("true");



} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}