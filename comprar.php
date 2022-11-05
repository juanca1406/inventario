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
    <title>Comprar</title>
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
          <li><a href="usuario.php" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></a></li>
          <li><a href="tienda.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tienda</font></font></a></li>
          <li><a href="carrito.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          <?php
          if(!empty($_SESSION['carrito'])){
            echo "Carrito(";
          echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
          ?>)
          <?php 
	        }else{
        ?>
        Carrito
        <?php } ?> </font></font></a></li>
        </ul>

        
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="hacer" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configuracion</font></font></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrarsesion.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desconectar</font></font></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <?php if($mensaje!=""){ ?>
  <div class="alert alert-success">
  <?php echo   $mensaje; ?>
    <a href="carrito.php"><button class="btn btn-success">Ver carrito</button></a>
</div>
  <?php } ?>
  
  <?php

		$stmt = $pdo->query('SELECT * FROM productos where id='.$_GET['id']);

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>
  

<div class="card-columns">
         <div class="card">
      <img src="imagenes/<?php echo $row['imagen'];?>" class="card-img-top" height="300"  alt="...">
       <div class="card-body">     
    </div>
    <div style="position:relative; left:550px; top:-335px;">
         
        <h1><?php echo $row['nombre'];?></h1>
        <span>Descuento: -<?php echo $row['preciocosto']?>%</span>

        <h2>Precio Actual: $<?php echo $row['precio']; ?></h2><br>
        <?php
          $total=($row['preciocosto']*$row['precio']/100);
          echo '<center><h2>Con Descuento:</h2></center>';
          echo '<center><h2 id="total">Total: $'.$total.'</h2></center>';
       ?>
        <div style = "position:relative; top:63px;  left: 10px;">
          <a href="pago.php"><Button class="btn btn-info">Comprar</Button></a>
        </div>  
        <form action="" method="post">
          <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($row['id'],COD,KEY); ?>">
          <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($row['imagen'],COD,KEY); ?>">
          <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($row['nombre'],COD,KEY); ?>">
          <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($row['precio'],COD,KEY); ?>">
          <input type="hidden" name="preciocosto" id="preciocosto" value="<?php echo openssl_encrypt($row['preciocosto'],COD,KEY); ?>">
          <input type="hidden" name="categoria" id="categoria" value="<?php echo openssl_encrypt($row['categoria'],COD,KEY); ?>">
          <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">


        <div style = "position:relative; top:25px;  left: 120px;">
         <button name="Guardar" value="Agregar" type="submit" class="btn btn-info">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>  
          Guardar</button>
        </div>
        </form>
    </div>
   
<?php
  }
?>
