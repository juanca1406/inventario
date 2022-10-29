<?php
include 'conexion.php';
include 'carritoprueba.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carrito</title>
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
          <li><a href="carrito.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		  Carrito</font></font></a></li>
         
        </ul>

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
</body>
<h3>Lista del carrito</h3>
<?php if(!empty($_SESSION['carrito'])){ ?>
<table class="table table-light table-bordered">
	<tbody>
		<tr>
			<th width="20%">Imagen</th>
			<th width="20%" class="text-center">Nombre</th>
			<th width="20%" class="text-center">Precio</th>
			<th width="20%" class="text-center">Cantidad</th>
			<th width="20%" class="text-center">Total</th>
			<th width="5%" class="text-center">--</th>
		</tr>
		<?php $total=0; ?>
		<?php foreach($_SESSION['carrito'] as $indice=>$row){ ?>
		<tr>
			<td width=""><img src="imagenes/<?php echo $row['imagen']; ?>" class="card-img-top" width="40" height="50" alt=""></td>
			<td width="20%" class="text-center"><?php echo $row['nombre']; ?></td>
			<td width="20%" class="text-center"><?php echo $row['precio']; ?></td>
			<td width="20%" class="text-center"><?php echo $row['cantidad']; ?></td>
			<td width="20%" class="text-center"><?php echo number_format($row['precio']*$row['cantidad'],2); ?></td>
			<td width="5%">

			<form action="" method="post">
			<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($row['id'],COD,KEY); ?>">
			<button class="btn btn-danger" type="submit" name="Guardar" value="Eliminar" >Eliminar</button>
			</form>
			</td>
			
		</tr>
		<?php $total=$total+($row['precio']*$row['cantidad']); ?>
		<?php } ?>
		<tr>
			<td colspan="3" align="right"><h3>Total</h3></td>
			<td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
		</tr>
	</tbody>
</table>
</html>
<?php 
	}else{
?>
<div class="alert alert-success">
		No ayy productos en el carrito...
</div>
<?php } ?>