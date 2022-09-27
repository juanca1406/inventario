<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
</html>
<div class="container-fluid">
<div class="row">

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
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg- sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
    <a href="admin.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil: Admin</font></font></span>
    </a>
    <hr>
    <ul class="nav flex-column">
      <li>
        <a href="agregar.php" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Agregar
          
        </font></font></a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Pedidos
        </font></font></a>
      </li>
      <li>
        <a href="inventario.php" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Productos
        </font></font></a>
      </li>
    </ul>
  </div>
</nav>
<main class="col-lg">
<form method="post" action="">
<div class="col-md-2 mb-3"><br><br> 
     <label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
     Codigo</font></font></label>     
     <input name="codigo" type="text" class="form-control"placeholder="" required>  
</div>
<div class="col-md-3 mb-3"> 
     <label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
     Nombre del producto</font></font></label>     
     <input name="nombre" type="text" class="form-control"placeholder="" required>  
</div>
<div class="col-md-3 mb-3"> 
     <label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
     Precio</font></font></label>     
     <input name="precio" type="text" class="form-control"placeholder="" required>  
</div>

<div class="col-md-3 mb-3"> 
     <label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
     Categoria</font></font></label>     
     <input name="categoria" type="text" class="form-control"placeholder="" required>  
</div>
<div style="position:relative; left:400px; top:-435px;">
<label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
     Opcional: </font></font></label>     
</div>
<div class="col-md-3 mb-3" style="position:relative; left:400px; top:-435px;"> 
     <label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
     Precio del costo</font></font></label>     
     <input name="categoria" type="text" class="form-control"placeholder="" required>  
</div>
<div class="mb-3 col-md-4" style = "position:relative; left:400px; top:-430px;">
  <label for="formFile" class="form-label">Seleccionar una imagen</label>
  <input name="imagen" class="form-control" type="file" id="formFile">
</div>
<div style = "position:relative; left:-600px; top:-250px;">
    <button name="submit" class="w-40 btn btn-md btn-primary" style="float: right; " type="submit">Agregar</button>
</div>
</form>

<?php
		if(isset($_POST['submit'])){
			require("registro2.php");
		}
	?>
</main>
