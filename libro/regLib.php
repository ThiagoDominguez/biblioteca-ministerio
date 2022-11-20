<?php

$inpLibroNumInventario = $_POST["inp_libro-numeroInventario"];
$inpLibroInicialesAutor = $_POST["inp_libro-autor"];

$inpLibroCodInventario = $_POST["inp_libro-codigoInventario"];

$inpLibroCodMat = $_POST["inp_libro-codigoMaterial"];

try {
  $conexion = new PDO("mysql:host=localhost;port=3306;dbname=biblioteca", "Thiago", "2001");

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $pdo = $conexion->prepare("INSERT INTO libro VALUES(?,?,?,?)");

  $pdo->bindParam(1, $inpLibroNumInventario);
  $pdo->bindParam(2, $inpLibroInicialesAutor);
  $pdo->bindParam(3, $inpLibroCodInventario);
  $pdo->bindParam(4, $inpLibroCodMat);
  $pdo->execute() or die(print($pdo->errorInfo()));
  echo json_encode("true");
} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}