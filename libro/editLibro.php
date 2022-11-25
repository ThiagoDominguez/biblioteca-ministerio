<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_POST["id"];
$numInventario = $_POST["inp_libro-numeroInventario"];
$titulo = $_POST["inp_libro-titulo"];
$id = $_POST["id"];
$autor = $_POST["inp_libro-autor"];
$codMat = $_POST["inp_libro-codigoMaterial"];
$codInv = $_POST["inp_libro-codigoInventario"];

$sqlEdit = "UPDATE libro SET titulo='$titulo',iniciales_autor='$autor',cod_inventario='$codInv',cod_material='$codMat'WHERE num_inventario='$numInventario'";


$query = mysqli_query($connect, $sqlEdit);


if ($query) {
  header("Location:libro.php");
}

?>