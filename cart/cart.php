<?php 
  include('../conexion.php');
  include ('../carritoprueba.php');
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="../cart/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cart/css/magnific-popup.css">
    <link rel="stylesheet" href="../cart/css/jquery-ui.css">
    <link rel="stylesheet" href="../cart/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../cart/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../cart/css/aos.css">

    <link rel="stylesheet" href="../cart/css/style.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../styles/responsive.css">
    
  </head>
  <div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Envios Gratis</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->
								<li class="account">
									<a href="#">
										MY Cuenta
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="../login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Iniciar</a></li>
										<li><a href="../registrar.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Registro</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
  <div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">Nombre de<span> la Empresa</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="../index.php">Hogar</a></li>
								<li><a href="../tienda.php">Tienda</a></li>
								<li><a href="../contactos.php">Contactos</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="../cart/cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items"> <?php echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?>
		</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-price">Descuento</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
                <tbody>
                <?php $total=0; ?>

                <?php if(!empty($_SESSION['carrito'])){ ?>
                <?php foreach($_SESSION['carrito'] as $indice=>$row){ ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="../imagenes/<?php echo $row['imagen']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $row['nombre']; ?></h2>
                    </td>
                    <td>$<?php echo $row['precio']; ?></td>
                    <td>$<?php echo $row['preciocosto']; ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$<?php echo $row['precio']; ?></td>
                    <td>
                      <form action="" method="post">
			                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($row['id'],COD,KEY); ?>">
			                  <button class="btn btn-primary height-auto btn-sm" type="submit" name="Guardar" value="Eliminar" >X</button>
			                </form>
                    </td>
                  </tr>
                  <?php $desc=($row['preciocosto']*$row['precio']/100);?>
                  <?php $total=$total+($row['precio']*$row['cantidad']); ?>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
          
              <div class="col-md-6">
                <a href="../index.php"><button class="btn btn-outline-primary btn-sm btn-block">SEGUIR COMPRANDO</button></a>
              </div>
            </div>
            
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">TOTALES DEL CARRITO</h3>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Descuento</span>
                  </div>
                  
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><td>$</td></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><td>$<?php echo number_format($total,2);?></td></strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
	}else{
?>
<div class="alert alert-success">
		No ayy productos en el carrito...
</div>
<?php } ?>