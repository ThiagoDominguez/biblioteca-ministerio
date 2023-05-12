<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
  <script type="module" src="libro.js" defer></script>
  <title>Biblioteca</title>
</head>

<body>
  <header class="header">
    <a href="../index.html">
      <img class="header_img" src="../assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <a href="../unlogin.php"><i class="	fa fa-sign-out">Cerrar Sesion</i></a>
      <a href="../material/material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a class="header_nav--active" href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
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
    <!-- <form class="containerPrincipal_form" method="post" id="form_libro">
      <label for="">Numero de inventario</label><br /> 
    <input class="containerPrincipal_form--input dni" type="number" name="inp_libro-numeroInventario"
      placeholder="Numero del inventario" minlength="8" maxlength="8" size="8" id="inp_libro-numeroInventario" /><br />
    <label for="">Titulo</label><br />
    <input class="containerPrincipal_form--input" name="inp_libro-titulo" type="text" placeholder=" Titulo del libro"
      id="inp_libro-titulo" /><br />
    <label for="">Autor</label><br />
    <input class="containerPrincipal_form--input" name="inp_libro-autor" type="text" placeholder="Nombre del autor"
      id="inp_libro-autor" /><br />
    <label for="">Codigo de inventario</label><br />
    <input class="containerPrincipal_form--input" type="number" name="inp_libro-codigoInventario"
      placeholder="Codigo de inventario" id="inp_libro-codigoInventario" /><br />
    <label for="">Codigo de material</label><br />
    <input class="containerPrincipal_form--input" type="number" name="inp_libro-codigoMaterial"
      placeholder="Codigo del material" id="inp_libro-codigoMaterial" /><br />
    <button id="btn-libro" type="submit" class="containerPrincipal_form--btn">
      Agregar
    </button>
    </form>-->
  </main>
  <!-- <div>
    <p id="return-libro"></p>
  </div> -->
  <?php
  $bd = "biblioteca";
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);
  $query = mysqli_query($connect, "SELECT * FROM libro");
  if ($query) {
    while ($row = $query->fetch_array()) {
      $numInv = $row["num_inventario"];
      $tituloLibro = $row["titulo"];
      $autorLibro = $row["iniciales_autor"];
      $codInventario = $row["cod_inventario"];
      $codMat = $row["cod_material"];
      ?>
      <div class="main_table-libro">
        <table class="table-libro">
          <tr class="tr-libro">
            <!-- <th class="th-libro">Numero de inventario</th> -->
            <th class="th-libro">Titulo</th>
            <th class="th-libro">Autor</th>
            <!-- <th class="th-libro">Codigo Inventario</th> -->
            <!-- <th class="th-libro">Codigo Material</th> -->
          </tr>
          <tr class="tr-libro">

            <td class="td-libro" style="width:200px">
              <?php echo $tituloLibro ?>
            </td>
            <td class="td-libro" style="width:200px">
              <?php echo $autorLibro ?>
            </td>


          </tr>
        </table>
      </div>
      <style>
        .main_table-libro {
          width: 100%;
        }

        .table-libro,
        .tr-libro,
        .th-libro,
        .td-libro {
          border-collapse: collapse;
          border: 1px rgba(10, 10, 10, .4)solid;


        }

        .table-libro,
        .th-libro,
        .td-libro {
          text-align: center;
        }

        .table-libro {
          margin: 0 auto;
          width: 95%;
        }


        .btn-libroDelete,
        .btn-libroEdit {
          background-color: transparent;
          border: none;
          cursor: pointer;
          width: 100%;
          margin: 0;
          text-decoration: none;
          color: black;
        }

        .btn-libroDelete:hover {
          background-color: red;

        }

        .btn-libroEdit:hover {
          background-color: green;
        }

        .td-libro {
          background-color: rgb(77, 245, 241);
        }
      </style>
      <?php
    }
  }







  ?>
</body>

</html>