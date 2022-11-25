<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
  <script src="../script.js" defer></script>
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
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a class="header_nav--active" href="catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
</body>
<main class="containerPrincipal">
  <?php
  $bd = "biblioteca";
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);
  $queryLibro = mysqli_query($connect, "SELECT titulo,iniciales_autor FROM libro ");
  $querySocio = mysqli_query($connect, "SELECT dni FROM estudiante");
  $queryEstado = mysqli_query($connect, "SELECT descripcion FROM estado");
  $queryEjemplar = mysqli_query($connect, "SELECT stock FROM ejemplar ");
  if ($queryLibro or $querySocio or $queryEjemplar or $queryEstado) {
    while ($row = $queryLibro->fetch_array()) {
      $tituloLib = $row["titulo"];
      $autorLib = $row["iniciales_autor"];

  ?>
  <div class="main_table-catalogo">
    <tr class="tr-catalogo">
      <th class="th-catalogo">Socio</th>
      <th class="th-catalogo">Titulo</th>
      <th class="th-catalogo">Autor</th>
      <th class="th-catalogo">Estado</th>
      <th class="th-catalogo">Stock</th>
    </tr>
    <tr class="tr-catalogo">
      <td class="td-catalogo">
        <?php #echo $dniSoc ?>
      </td>
      <td class="td-catalogo">
        <?php echo $tituloLib ?>
      </td>
      <td class="td-catalogo">
        <?php echo $autorLib ?>
      </td>
      <td class="td-catalogo">
        <?php #echo $descEst ?>
      </td>
      <td class="td-catalogo">
        <?php #echo $stockEje ?>
      </td>
      <td class="td-catalogo"></td>
      <td class="td-catalogo"></td>
    </tr>
  </div>
  <style>
    .main_table-catalogo {
      width: 100%;
    }

    .table-catalogo,
    .tr-catalogo,
    .th-catalogo,
    .td-catalogo {
      border-collapse: collapse;
      border: 1px rgba(10, 10, 10, .4)solid;


    }

    .table-catalogo,
    .th-catalogo,
    .td-catalogo {
      text-align: center;
    }

    .table-catalogo {
      margin: 0 auto;
      width: 95%;
    }


    . td button .btn-catalogoDelete:hover {
      background-color: red;
    }

    .td-catalogo {
      background-color: rgb(77, 245, 241);
    }
  </style>






  <?php
    }
  }


  ?>
</main>

</html>