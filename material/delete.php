<?php
$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_REQUEST["id"];
$sql = "DELETE FROM material WHERE id_material = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
  header("Location: material.php");
  header("Location: material.php?error= Registro eliminado Codigo de material: $id");

}


?>