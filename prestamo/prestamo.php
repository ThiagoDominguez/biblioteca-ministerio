<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
  <script src="../prestamo/prestamo.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>
  <header class="header">
    <a href="../index.html">
      <img class="header_img" src="../assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <a href="../usuario/usuario.php"><i class="fa fa-users"></i> Usuario</a>
      <a href="../material/material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a class="header_nav--active" href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" method="post" id="form_prestamo">
      <label for="">ID prestamo</label>
      <input required id="inp_prestamo-id" name="inp_prestamo-id" type="number" placeholder="ID del Prestamo"
        class="containerPrincipal_form--input" />
      <label for="">DNI</label><br />
      <input required id="inp_prestamo-dni" name="inp_prestamo-dni" class="containerPrincipal_form--input dni"
        type="number" placeholder="DNI del socio" maxlength="8" /><br />
      <label for="">ID del material</label><br />
      <input required id="inp_prestamo-idMaterial" name="inp_prestamo-idMaterial" class="containerPrincipal_form--input"
        type="text" placeholder="ID del material" /><br />
      <label for="">Fecha de salida</label><br />
      <input required id="inp_prestamo-fechaSalida" name="inp_prestamo-fechaSalida"
        class="containerPrincipal_form--input" type="date" /><br />
      <label for="">Fecha de devolucion</label><br />
      <input required id="inp_prestamo-fechaDevolucion" name="inp_prestamo-fechaDevolucion"
        class="containerPrincipal_form--input" type="date" /><br />
      <button id="btn-prestamo" type="submit" class="containerPrincipal_form--btn">
        Agregar
      </button>
    </form>
  </main>
  <div>
    <p id="return-prestamo"></p>
  </div>
  <?php
  $bd = "biblioteca";
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);
  $query = mysqli_query($connect, "SELECT * FROM prestamo");
  if ($query) {
    while ($row = $query->fetch_array()) {
      $idPrestamo = $row["id_prestamo"];
      $dniSocioPrestamo = $row["id_socio"];
      $idMatPrestamo = $row["id_material"];
      $fechaSalida = $row["fecha_salida"];
      $fechaDevolucion = $row["fecha_devolucion"];
  ?>
  <div class="main_table-prestamo">
    <table class="table-prestamo">
      <tr class="tr-prestamo">
        <th class="th-prestamo">ID Prestamo</th>
        <th class="th-prestamo">DNI Socio</th>
        <th class="th-prestamo">ID Material</th>
        <th class="th-prestamo">Fecha de Salida</th>
        <th class="th-prestamo">Fecha de Devolucion</th>
      </tr>
      <tr class="tr-prestamo">
        <td class="td-prestamo">
          <?php echo $idPrestamo ?>
        </td>
        <td class="td-prestamo">
          <?php echo $dniSocioPrestamo ?>
        </td>
        <td class="td-prestamo">
          <?php echo $idMatPrestamo ?>
        </td>
        <td class="td-prestamo">
          <?php echo $fechaSalida ?>
        </td>
        <td class="td-prestamo">
          <?php echo $fechaDevolucion ?>
        </td>
        <td class="td-prestamo">
          <button class="fa fa-ban" class="btn-PrestamoDelete" id="btn-PrestamoDelete" name="btn-PrestamoDelete"
            style="background-color:transparent;border:none; cursor: pointer;" onclick=""></button>
        </td>
      </tr>
    </table>
  </div>
  <style>
    .main_table-prestamo {
      width: 100%;
    }

    .table-prestamo,
    .tr-prestamo,
    .th-prestamo,
    .td-prestamo {
      border-collapse: collapse;
      border: 1px rgba(10, 10, 10, .4)solid;


    }

    .table-prestamo,
    .th-prestamo,
    .td-prestamo {
      text-align: center;
    }

    .table-prestamo {
      margin: 0 auto;
      width: 90%;
    }


    . td button .btn-PrestamoDelete:hover {
      background-color: red;
    }

    .td-prestamo {
      background-color: rgb(77, 245, 241);
    }
  </style>





  <?php
    }
  }



  ?>
</body>

</html>