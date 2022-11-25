<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />

</head>
<link rel="shortcut icon" href="../assets/libros.png" type="image/x-icon" />
<script type="module" src="material.js" defer></script>
<title>Biblioteca</title>
</head>

<body>
  <header class="header">
    <a href="../index.html">
      <img class="header_img" src="../assets/ministerio.png" alt="imagen del Ministerio de Educacion Corrientes" />
    </a>
    <nav class="header_nav">
      <a href="../usuario/usuario.php"><i class="fa fa-users"></i> Usuario</a>
      <a class="header_nav--active" href="material.php"><i class="fa fa-list"></i> Material</a>
      <a href="../libro/libro.php"><i class="fa fa-book"></i> Libro</a>
      <a href="../ejemplar/ejemplar.php"><i class="fa fa-save"></i> Ejemplar</a>
      <a href="../estado/estado.php"><i class="fa fa-exclamation-circle"></i> Estado</a>
      <a href="../socio/socio.php"><i class="fa fa-user-plus"></i> Socio</a>
      <a href="../prestamo/prestamo.php"><i class="fa fa-exchange"></i> Prestamo</a>
      <a href="../catalogo/catalogo.php"><i class="fa fa-folder"></i> Catalogo</a>
    </nav>
  </header>
  <main class="containerPrincipal">
    <form class="containerPrincipal_form" method="post" id="form_material">
      <label for="">ID material</label><br />
      <input required id="inp_material-id" name="inp_material-id" class="containerPrincipal_form--input" type="number"
        placeholder="ID del material" minlength="8" maxlength="8" size="8" /><br />
      <label for="">Descripcion</label><br />
      <select required class="containerPrincipal_form--select" name="inp_material-desc" id="inp_material-desc">
        <option value="" selected>--Selecciona la descripcion--</option>
        <option value="Copia">Copia</option>
        <option value="Original">Original</option>
      </select><br />
      <label for="">Fecha</label><br />
      <input required id="inp_material-fecha" name="inp_material-fecha" class="containerPrincipal_form--input"
        type="date" placeholder="Apellido del nuevo usuario" /><br />
      <button type="submit" id="btn-material" class="containerPrincipal_form--btn">
        Agregar
      </button>
    </form>
  </main>
  <div class="">
    <p id="return-material"></p>
  </div>
  <?php
  $hostname = "localhost";
  $nombreUsuario = "Thiago";
  $pass = "2001";
  $bd = "biblioteca";
  $connect = mysqli_connect($hostname, $nombreUsuario, $pass, $bd);
  $query = mysqli_query($connect, "SELECT * FROM material");

  if ($query) {
    while ($row = $query->fetch_array()) {
      $idMaterial = $row["id_material"];
      $matDesc = $row["descripcion"];
      $matFecha = $row["fecha"];
  ?>
  <div class="main_table-material">
    <table class="table-material">
      <tr class="tr-material">
        <th class="th-material">ID material</th>
        <th class="th-material">Descripcion</th>
        <th class="th-material">Fecha</th>
      </tr>
      <tr class="tr-material">
        <td class="td-material" style="width:10px">
          <?php echo $idMaterial ?>
        </td>
        <td class="td-material" style="width:100px">
          <?php echo $matDesc ?>
        </td>
        <td class="td-material" style="width:300px">
          <?php echo $matFecha ?>
        </td>
        <td class="td-material" style="width:10px">
          <button class="fa fa-ban" class="btn-materialDelete" id="btn-materialDelete" name="btn-materialDelete"
            style="background-color:transparent;border:none; cursor: pointer;" onclick=""></button>
        </td>
      </tr>
    </table>
  </div>
  <style>
    .main_table-material {
      width: 100%;
    }

    .table-material,
    .tr-material,
    .th-material,
    .td-material {
      border-collapse: collapse;
      border: 1px rgba(10, 10, 10, .4)solid;


    }

    .table-material,
    .th-material,
    .td-material {
      text-align: center;
    }

    .table-material {
      margin: 0 auto;
      width: 95%;
    }


    . td button .btn-materialDelete:hover {
      background-color: red;
    }

    .td-material {
      background-color: rgb(77, 245, 241);
    }
  </style>



  <?php
    }
  }




  ?>
</body>

</html>