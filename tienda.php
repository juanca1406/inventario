<?php 
  include('connect_db.php');
  $query = "select * from productos";
  $resultado = mysqli_query($mysqli,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Oreja"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="usuario.php" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inicio</font></font></a></li>
          <li><a href="tienda.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tienda</font></font></a></li>
          <li><a href="carrito.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrito(0)</font></font></a></li>
         
        </ul>
        <div class="h-10 p-3 rounded-3;">
         <center><h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de la empresa</font></font></h2></center>
        </div>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Búsqueda..." aria-label="Búsqueda">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="hacer" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">

            <li><a class="dropdown-item" href="configuracion.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configuración</font></font></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrarsesion.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desconectar</font></font></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

        <div class="card-columns">
        <?php foreach($resultado as $row){ ?>
         <div class="card">
        
      <img src="imagenes/<?php echo $row['imagen']; ?>" class="card-img-top" height="317px";  alt="...">
       <div class="card-body">
      <center><h5 class="col-xs-12 col-sm-4 col-md-4 col-lg-6 text-center card-title"><strong><?php echo $row['nombre']; ?></strong></h5></center>
      <center><p><?php echo $row['descripcion']; ?></p></center>
      <h6 style = "position:relative;  top: 15px;" class="card-title"><strong>precio: <?php echo $row['precio']; ?></strong></h5></div>

      <a href="comprar.php?id=<?php echo $row['id'];?>"><button class="btn btn-secondary"  style = "position:relative; left:150px; top:-12px;">Comprar</button></a>
      </div>      
      
  <?php }?>
</body>
</html>

