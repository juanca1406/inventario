<?php
	require("connect_db.php");
    if(!empty($_POST)){
      $id = $_POST['id'];

      $query_delete = mysqli_query($mysqli,"DELETE FROM productos WHERE id=$id");
      if($query_delete){
        header("location: inventario.php");
      }else{
        echo "Error al eliminar";
      }
    }


 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

        <header class="p-3 mb-6 border-bottom">
<div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="" class="d-flex align-items-center mb-2 mb-lg-2 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Oreja"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-6 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="admin.php" class="nav-link px-6 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font>Inicio</a></li>
          <li><a href="inventario.php" class="nav-link px-6 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inventario</font></font></a></li>
          <li><a href="clientes.php" class="nav-link px-6 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clientes</font></font></a></li>
          <li><a href="productos.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Productos</font></font></a></li>
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
</header><br><br><br>
<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM productos WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
                $id=$row[0];
                $codigo=$row[1];
		    	      $nombre=$row[2];
                $categoria=$row[4];
                $imagen=$row[6];
		    }
		?>
<div class="container"><br>
    <div class="card">
        <center><div class="card-header bg-danger text-dark">ELIMINAR</div></center>
            <div class="card-body">
           
        
                <div class="row">
                    <center><p>¿Deseas eliminar el Codigo: <?php echo $codigo?>?</p></center>
                    <center><p>¿Deseas eliminar el Producto: <?php echo $nombre?>?</p></center>
                    <center><p>¿Deseas eliminar el Categoria: <?php echo $categoria?>?</p></center>
                    <center><img src="imagenes/<?php echo $imagen?>"  width="200px" height="100px" alt="..."></center>
                </div><br>
                <div class="d-md-block" style = "position:relative; left:480px;">
               
                <a href="eliminar.php?id=<?php echo $id?>"><button type="submit" style = "position:relative; left:0px;" class="btn btn-success" type="button">Si</button></a>
                <a href="inventario.php"><button style = "position:relative; left:20px;" class="btn btn-danger" type="button">No</button></a>
                </div>

          
        </div> 
    </div> 
</div>
</html>
