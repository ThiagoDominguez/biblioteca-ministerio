<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_POST["inp_estado-id"];
$descripcion = $_POST["inp_estado-desc"];
$codMat = $_POST["inp_estado-codigoMaterial"];


$sqlEdit = "UPDATE estado SET descripcion='$descripcion',cod_material='$codMat'WHERE id_estado='$id'";


$query = mysqli_query($connect, $sqlEdit);


if ($query) {
  header("Location:estado.php");
  header("Location:estado.php?success= Registro editado ID:$id");
}

?>