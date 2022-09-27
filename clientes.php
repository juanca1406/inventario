<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Oreja"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="admin.php" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inicio</font></font></a></li>
          <li><a href="inventario.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inventario</font></font></a></li>
          <li><a href="clientes.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clientes</font></font></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Productos</font></font></a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Búsqueda..." aria-label="Búsqueda">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="hacer" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajustes</font></font></a></li>
            <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrarsesion.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desconectar</font></font></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<main class="col-md-9 ms-sm-auto col-lg-12 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clientes</font></font></h1>
        <div class="btn-toolbar mb-0 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>


      <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos de los clientes</font></font></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Id</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuario</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirreción Correo</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajustes</font></font></th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <?php

            require("connect_db.php");
            $sql=("SELECT * FROM login");

            //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
            $query=mysqli_query($mysqli,$sql);

             
            while($arreglo=mysqli_fetch_array($query)){
               echo "<tr class='success'>";
                 echo "<td>$arreglo[0]</td>";
                 echo "<td>$arreglo[1]</td>";
                 echo "<td>$arreglo[3]</td>";
   
                 echo "<td><a href='actualizar.php?id=$arreglo[0]'><button name='submit' class='w-40 btn btn-md btn-success' type='submit'>Editar</button></td>";               
             echo "</tr>";
           }
   
           echo "</table>";
   
             extract($_GET);
             if(@$idborrar==2){
       
               $sqlborrar="DELETE FROM login WHERE id=$id";
               $resborrar=mysqli_query($mysqli,$sqlborrar);
               echo '<script>alert("REGISTRO ELIMINADO")</script> ';
               //header('Location: proyectos.php');
               echo "<script>location.href='admin.php'</script>";
             }
   
?>
            </tr>
          </tbody>
        </table>
      </div>
    </main>