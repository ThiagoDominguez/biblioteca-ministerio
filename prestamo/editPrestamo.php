<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_POST["inp_prestamo_id"];
$dni = $_POST["inp_prestamo-dni"];
$idMat = $_POST["inp_prestamo-idMaterial"];
$fechaSalida = $_POST["inp_prestamo-fechaSalida"];
$fechaDevolucion = $_POST["inp_prestamo-fechaDevolucion"];



$sqlEdit = "UPDATE prestamo SET id_socio='$dni',id_material='$idMat',fecha_salida='$fechaSalida',fecha_devolucion='$fechaDevolucion'WHERE id_prestamo='$id'";


$query = mysqli_query($connect, $sqlEdit);


if ($query) {
  header("Location:prestamo.php");
  header("Location:prestamo.php?success= Registro editado, ID: $id");



}

?>