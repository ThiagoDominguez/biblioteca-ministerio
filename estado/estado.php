<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
  <script src="../estado/estado.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>

  <header class="header">
    <a href="../index.html">
      <img class="header_img" src="../assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <!-- <a href="../usuario/usuario.php"><i class="fa fa-users"></i> Usuario</a> -->
      <a href="../unlogin.php"><i class="	fa fa-sign-out">Cerrar Sesion</i></a>
      <a href="../material/material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a class="header_nav--active" href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" id="form_estado" method="post">
      <label for="">ID Estado</label><br />
      <input class="containerPrincipal_form--input dni" type="number" name="inp_estado-id" placeholder="ID del estado"
        minlength="8" maxlength="8" size="8" id="inp_estado-id" /><br />
      <label for="">Descripcion</label><br />
      <select title="inp_estado-desc" class="containerPrincipal_form--select" name="inp_estado-desc"
        id="inp_estado-desc">
        <option value="" selected>--Selecciona la descripcion--</option>
        <option value="Prestado">Prestado</option>
        <option value="Disponible">Disponible</option>
      </select><br />
      <label for="">Codigo material</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_estado-codigoMaterial"
        placeholder="Codigo de material" id="inp_estado-codigoMaterial" /><br />
      <button id="btn-estado" name="btn-estado" type="submit" class="containerPrincipal_form--btn">
        Agregar
      </button>
    </form>
  </main>
  <div>
    <p>

    </p>
    <!-- <input type="search" name="inp_estado-search" id="inp_estado-search" class="containerPrincipal_form--input dni"> -->

  </div>
  <?php
  $bd = "biblioteca";
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass);
  mysqli_select_db($connect, $bd);
  $query = mysqli_query($connect, "SELECT *FROM estado");

  if ($query) {
    while ($row = $query->fetch_array()) {
      $idEstado = $row["id_estado"];
      $descEstado = $row["descripcion"];
      $codMatEstado = $row["cod_material"];
      // $btnEstadoDelete = $_POST["btn-EstadoDelete"];
  
  ?>
  <div style="width:100%; ">
    <style>
      td:hover {
        background-color: red;
      }
    </style>
    <table class="table-estado"
      style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid;width:90%;text-align: center;margin:0 auto;">
      <tr style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid;">
        <th
          style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid; text-align: center;border-spacing: 10px ;">
          ID estado</th>
        <th
          style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid; text-align: center;border-spacing: 10px ;">
          Descripcion</th>
        <th
          style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid; text-align: center;border-spacing: 10px ;">
          Codigo material
        </th>
      </tr>
      <tr style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid">
        <td
          style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid; text-align: center; background-color: rgb(77, 245, 241); ">
          <?php echo $idEstado; ?>
        </td>
        <td
          style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid; text-align: center;  background-color: rgb(77, 245, 241); ">
          <?php echo $descEstado; ?>
        </td>
        <td
          style="border-collapse: collapse;border:1px rgba(10,10,10,.4) solid; text-align: center;  background-color: rgb(77, 245, 241);">
          <?php echo $codMatEstado; ?>
        </td>
        <td class="td-estado" style="width:10px">
          <a href="delete.php?id=<?php echo $row["id_estado"] ?>" class="fa fa-ban btn-libroDelete" id="btn-libroDelete"
            name="btn-libroDelete" onclick="return confirm('¿Estas seguro de eliminar este registro?')"></a>
        </td>

        <td class="td-estado" style="width:10px">
          <a href="../editEst.php?id=<?php echo $row["id_estado"] ?>" class="fa fa-pencil btn-libroEdit"
            id="btn-libroEdit" name="btn-libroEdit"></a>
        </td>
      </tr>

    </table>
  </div>
  <?php

    }
  }
  ?>


</body>

</html>