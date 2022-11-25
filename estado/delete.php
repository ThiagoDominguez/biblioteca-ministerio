<?php
$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_REQUEST["id"];
$sql = "DELETE FROM estado WHERE id_estado = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
  header("Location: estado.php");
}



?>