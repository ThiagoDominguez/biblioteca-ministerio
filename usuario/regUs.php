<?php


$inpUsuarioDni = $_POST["inp_usuario-dni"];
$inpUsuarioName = $_POST["inp_usuario-name"];
$inpUsuarioLastName = $_POST["inp_usuario-lastname"];

try {

  $conexion = new PDO('mysql:host=localhost;port=3306;dbname=biblioteca', 'Thiago', '2001');
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $pdo = $conexion->prepare("INSERT INTO usuario(id_usuario,nombre,apellido) VALUES(?,?,?)");
  $pdo->bindParam(1, $inpUsuarioDni);
  $pdo->bindParam(2, $inpUsuarioName);
  $pdo->bindParam(3, $inpUsuarioLastName);
  $pdo->execute() or die(print($pdo->errorInfo()));

  echo json_encode("true");
} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}


?>