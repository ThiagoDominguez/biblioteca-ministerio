<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_POST["inp_ejemplar-idEstado"];
$descripcion = $_POST["inp_ejemplar-desc"];
$codMat = $_POST["inp_ejemplar-codigoMaterial"];
$stock = $_POST["inp_ejemplar-stock"];




$sqlEdit = "UPDATE ejemplar SET descripcion='$descripcion',cod_material='$codMat',stock='$stock'WHERE id_estado='$id'";


$query = mysqli_query($connect, $sqlEdit);


if ($query) {
  header("Location:ejemplar.php");
}

?>