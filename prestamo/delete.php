<?php
$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_REQUEST["id"];
$sql = "DELETE FROM prestamo WHERE id_prestamo = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
  header("Location: prestamo.php");
  header("Location:prestamo.php?error= Registro eliminado, ID: $id");


}



?>