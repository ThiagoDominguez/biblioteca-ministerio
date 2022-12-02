<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
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
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a class="header_nav--active" href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <?php
  if (isset($_GET["success"])) {
  ?>
  <p class="success-registro">
    <?php echo $_GET["success"] ?>
  </p>
  <?php
  }

  ?>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" id="form_socio" method="post">
      <label for="">ID Socio</label><br />
      <input id="inp_socio-idEstudiante" required class="containerPrincipal_form--input dni" type="number"
        placeholder="ID del socio" minlength="8" maxlength="8" size="8" name="inp_socio-idEstudiante" readonly /><br />
      <label for="">DNI</label><br />
      <input id="inp_socio-dni" required class="containerPrincipal_form--input dni" type="number"
        placeholder="DNI del  socio" minlength="8" maxlength="8" size="8" name="inp_socio-dni" /><br />
      <label for="">Nombre</label><br />
      <input id="inp_socio-name" required class="containerPrincipal_form--input" type="text"
        placeholder="Nombre del  socio" name="inp_socio-name" /><br />
      <label for="">Apellido</label><br />
      <input id="inp_socio-lastname" required class="containerPrincipal_form--input" type="text"
        placeholder="Apellido del  socio" name="inp_socio-lastname" /><br />
      <label for="">Carrera</label><br />
      <input id="inp_socio-carrera" required class="containerPrincipal_form--input" type="text"
        placeholder="Carrera del  socio" name="inp_socio-carrera" /><br />
      <label for="">Direccion</label><br />
      <input id="inp_socio-address" required class="containerPrincipal_form--input" type="text"
        placeholder="Direccion del socio" name="inp_socio-address" /><br />
      <label for="">Telefono</label><br />
      <input id="inp_socio-tel" required class="containerPrincipal_form--input" type="tel"
        placeholder="Numero del socio" name="inp_socio-tel" /><br />
      <label for="">Email</label><br />
      <input id="inp_socio-email" required class="containerPrincipal_form--input" type="email" name="inp_socio-email"
        placeholder="Email del socio" />
      <label for="">Condicion</label><br />
      <select name="inp_socio-condicion" required id="inp_socio-condicion" class="containerPrincipal_form--select">
        <option value="" selected>--Seleccione Condicion--</option>
        <option value="Habilitado">Habilitado</option>
        <option value="Deshabilitado">Deshabilitado</option>
      </select>
      <button id="btn-socio" type="submit" class="containerPrincipal_form--btn" style="margin-top:10px;">
        Agregar
      </button>
    </form>
  </main>
  <div>
    <p id="return-socio"></p>
  </div>
  <?php
  $bd = "biblioteca";
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass);
  mysqli_select_db($connect, $bd);
  $query = mysqli_query($connect, "SELECT* FROM estudiante");
  if ($query) {
    while ($row = $query->fetch_array()) {
      $idSocio = $row["idestudiante"];
      $dniSocio = $row["dni"];
      $nombreSocio = $row["nombre"];
      $apellidoSocio = $row["apellido"];
      $direccionSocio = $row["direccion"];
      $telSocio = $row["telefono"];
      $emailSocio = $row["email"];
      $carreraSocio = $row["carrera"];
      $condicionSocio = $row["condicion"];
  ?>
  <div class="main_table-socio">

    <table class="table-socio">
      <tr class="tr-socio">
        <th class="th-socio">ID Estudiante</th>
        <th class="th-socio">DNI</th>
        <th class="th-socio">Nombre</th>
        <th class="th-socio">Apellido</th>
        <th class="th-socio">Direccion</th>
        <th class="th-socio">Telefono</th>
        <th class="th-socio">Email</th>
        <th class="th-socio">Carrera </th>
        <th class="th-socio">Condicion</th>
      </tr>
      <tr class="tr-socio">
        <td class="td-socio" style="width:5px">
          <?php echo $idSocio; ?>
        </td>
        <!-- <td class="td-socio" style="width:10px">
          <#?php echo $codSocio; ?>
        </td> -->
        <td class="td-socio" style="width:20px">
          <?php echo $dniSocio ?>
        </td>
        <td class=" td-socio" style="width:70px">
          <?php echo $nombreSocio ?>
        </td>
        <td class="td-socio" style="width:100px">
          <?php echo $apellidoSocio ?>
        </td>
        <td class=" td-socio" style="width:150px">
          <?php echo $direccionSocio ?>
        </td>
        <td class="td-socio" style="width:150px">
          <?php echo $telSocio ?>
        </td>
        <td class=" td-socio" style="width:300px">
          <?php echo $emailSocio ?>
        </td>
        <td class="td-socio" style="width:160px">
          <?php echo $carreraSocio ?>
        </td>
        <td class=" td-socio" style="width:100px">
          <?php echo $condicionSocio ?>
        </td>
        <td class="td-socio" style="width:10px">
          <a href="delete.php?id=<?php echo $row["idestudiante"] ?>" class="fa fa-ban btn-libroDelete"
            id="btn-socioDelete" name="btn-libroDelete"
            onclick="return confirm('¿Estas seguro de eliminar este registro?')"></a>
        </td>
        <td class="td-socio" style="width:10px">
          <a href="../editSoc.php?id=<?php echo $row["idestudiante"] ?>" class="fa fa-pencil btn-libroEdit"
            id="btn-libroEdit" name="btn-libroEdit"></a>
        </td>
      </tr>
    </table>
  </div>
  <style>
    .main_table-socio {
      width: 100%;
    }

    .table-socio,
    .tr-socio,
    .th-socio,
    .td-socio {
      border-collapse: collapse;
      border: 1px rgba(10, 10, 10, 0.4) solid;
    }

    .table-socio,
    .th-socio,
    .td-socio {
      text-align: center;
    }

    .table-socio {
      margin: 0 auto;
      width: 95%;
    }

    .td button .btn-SocioDelete:hover {
      background-color: red;
    }

    .td-socio {
      background-color: rgb(77, 245, 241);
    }
  </style>
  <?php
    }
  }






  ?>
  <script type="module" src="socio.js" defer></script>