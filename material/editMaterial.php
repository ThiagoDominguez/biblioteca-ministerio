<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_POST["inp_material-id"];
$descripcion = $_POST["inp_material-desc"];
$fecha = $_POST["inp_material-fecha"];


$sqlEdit = "UPDATE material SET descripcion='$descripcion',fecha='$fecha'WHERE id_material='$id'";


$query = mysqli_query($connect, $sqlEdit);


if ($query) {
  header("Location:material.php");
}

?>