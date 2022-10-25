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
          <li><a href="carrito.php" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrito</font></font></a></li>
         
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
</html>
<?php
	session_start();
	include 'conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$codigo="";
						$nombre="";
						$precio=0;
						$imagen="";

						//$re=mysql_query("select * from productos where id=".$_GET['id']);
						$stmt = $conn->query('SELECT * FROM productos where id='.$_GET['id']);
						while ($f = $stmt->fetch(PDO::FETCH_ASSOC)) {
							$codigo=$f['codigo'];
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'codigo'=>$codigo,
										'nombre'=>$nombre,
										'precio'=>$precio,
										'imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}


	}else{
		if(isset($_GET['id'])){
			$codigo="";
			$nombre="";
			$precio=0;
			$imagen="";

			//$re=mysql_query("select * from productos where id=".$_GET['id']);
			$stmt = $conn->query('SELECT * FROM productos where id='.$_GET['id']);

			while ($f = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$codigo=$f['codigo'];
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}

			$arreglo[]=array('Id'=>$_GET['id'],
							'codigo'=>$codigo,
							'nombre'=>$nombre,
							'precio'=>$precio,
							'imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
		echo "<section>";
		echo "<div class='container productos'>";
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				
				<div class="producto">
					
						<img src="imagenes/<?php echo $datos[$i]['imagen'];?>" widht="200px" height="100px"><br>
						<span>Codigo: <?php echo $datos[$i]['codigo'];?></span><br>
						<span ><?php echo $datos[$i]['nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['precio'];?></span><br>
						<span>Cantidad: 
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad" size="2" >
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['precio'];?></span><br>
						<a href="borrarcarrito.php?id=<?php echo $i?>" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
					
				
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['precio'])+$total;
				$_SESSION['facturaTotal']=$total;
			}

				echo "</div>";
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
			if($total!=0){
					echo '<center><a href="pago.php" class="aceptar">Comprar</a></center>';	
			}
			
		?>

		
	</section>

<script>

function faltaclienteJS(){
	alert("Debe loguearse");
}
</script>
