<?php
$idPrestamo = $_POST["inp_prestamo-id"];
$dniPrestamoSocio = $_POST["inp_prestamo-dni"];
$idMatPrestamo = $_POST["inp_prestamo-idMaterial"];
$fechaSalidaPrestamo = $_POST["inp_prestamo-fechaSalida"];
$fechaDevolucionPrestamo = $_POST["inp_prestamo-fechaDevolucion"];


try {
  $conexion = new PDO('mysql:host=localhost;port=3306;dbname=biblioteca', 'Thiago', '2001');
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $pdo = $conexion->prepare("INSERT INTO prestamo VALUES (?,?,?,?,?)");
  $pdo->bindParam(1, $idPrestamo);
  $pdo->bindParam(2, $dniPrestamoSocio);
  $pdo->bindParam(3, $idMatPrestamo);
  $pdo->bindParam(4, $fechaSalidaPrestamo);
  $pdo->bindParam(5, $fechaDevolucionPrestamo);
  $pdo->execute() or die(print($pdo->errorInfo()));
  if ($pdo) {
    header("Location:prestamo.php");
    header("Location:prestamo.php?success=Prestamo realizado correctamente");
  }

  echo json_encode("true");
} catch (PDOException $error) {
  echo $error->getMessage();
  die();
}







?>