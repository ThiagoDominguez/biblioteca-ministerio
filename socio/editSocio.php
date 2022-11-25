<?php

$hostname = "localhost";
$bd = "biblioteca";
$nombreUsuario = "Thiago";
$pass = "2001";
$connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);


$id = $_POST["inp_socio-cod"];
$dni = $_POST["inp_socio-dni"];
$nombre = $_POST["inp_socio-name"];
$apellido = $_POST["inp_socio-lastname"];
$carrera = $_POST["inp_socio-carrera"];
$direccion = $_POST["inp_socio-address"];
$telefono = $_POST["inp_socio-tel"];
$email = $_POST["inp_socio-email"];
$condicion = $_POST["inp_socio-condicion"];



$sqlEdit = "UPDATE estudiante SET dni='$dni',nombre='$nombre',apellido='$apellido',carrera='$carrera',direccion='$direccion',telefono='$telefono',email='$email',condicion='$condicion'WHERE idestudiante='$id'";


$query = mysqli_query($connect, $sqlEdit);


if ($query) {
  header("Location:socio.php");
}

?>