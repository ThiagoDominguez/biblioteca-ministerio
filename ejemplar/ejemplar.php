<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
  <script src="../ejemplar/ejemplar.js" defer></script>
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
      <a class="header_nav--active" href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" id="form_ejemplar" method="post">
      <label for="">ID Estado</label><br />
      <input class="containerPrincipal_form--input dni" type="number" name="inp_ejemplar-idEstado"
        placeholder="ID del estado" minlength="8" maxlength="8" size="8" id="inp_ejemplar-idEstado" /><br />
      <label for="">Descripcion</label><br />
      <input class="containerPrincipal_form--input" name="inp_ejemplar-desc" type="text" placeholder="Descripcion"
        id="inp_ejemplar-desc" /><br />
      <label for="">Codigo material</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_ejemplar-codigoMaterial"
        placeholder="Codigo de material" id="inp_ejemplar-codigoMaterial" /><br />
      <label for="">Stock</label><br />
      <input class="containerPrincipal_form--input" type="number" name="inp_ejemplar-stock"
        placeholder="Cantidad en Stock" id="inp_ejemplar-stock" /><br />
      <button id="btn-ejemplar" type="submit" class="containerPrincipal_form--btn">
        Agregar
      </button>
    </form>
  </main>
  <div>
    <p id="return-ejemplar"></p>
  </div>
  <?php
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $bd = "biblioteca";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);
  $query = mysqli_query($connect, "SELECT * FROM ejemplar");
  if ($query) {
    while ($row = $query->fetch_array()) {
      $idEstado = $row["id_estado"];
      $estadoDesc = $row["descripcion"];
      $estadoCodMat = $row["cod_material"];
      $stock = $row["stock"];
  ?>
  <div class="main_table-ejemplar">
    <table class="table-ejemplar">


      <tr class="tr-ejemplar">
        <th class="th-ejemplar">ID estado</th>
        <th class="th-ejemplar">Descripcion</th>
        <th class="th-ejemplar">Codigo material</th>
        <th class="th-ejemplar">Stock</th>
      </tr>
      <tr class="tr-ejemplar">
        <td class="td-ejemplar" style="width:10px">
          <?php echo $idEstado ?>
        </td>
        <td class="td-ejemplar" style="width:300px">
          <?php echo $estadoDesc ?>
        </td>
        <td class="td-ejemplar" style="width:10px">
          <?php echo $estadoCodMat ?>
        </td>
        <td class="td-ejemplar" style="width:10px">
          <?php echo $stock ?>
        </td>
        <td class="td-ejemplar" style="width:10px"><button class="fa fa-ban" class="btn-EjemplarDelete"
            id="btn-EjemplarDelete" name="btn-EjemplarDelete"
            style="background-color:transparent;border:none; cursor: pointer;" onclick=""></button></td>
      </tr>
    </table>
    <style>
      .main_table-ejemplar {
        width: 100%;
      }

      .table-ejemplar,
      .tr-ejemplar,
      .th-ejemplar,
      .td-ejemplar {
        border-collapse: collapse;
        border: 1px rgba(10, 10, 10, .4)solid;


      }

      .table-ejemplar,
      .th-ejemplar,
      .td-ejemplar {
        text-align: center;
      }

      .table-ejemplar {
        margin: 0 auto;
        width: 95%;
      }


      . td button .btn-EjemplarDelete:hover {
        background-color: red;
      }

      .td-ejemplar {
        background-color: rgb(77, 245, 241);
      }
    </style>
  </div>




  <?php
    }
  }

  ?>
</body>

</html>