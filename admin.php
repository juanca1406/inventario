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
</head>
<body>
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
            <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuevo proyecto...</font></font></a></li>
            <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajustes</font></font></a></li>
            <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrarsesion.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desconectar</font></font></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="h-100 p-5 text-bg-dark rounded-3;">
          <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bienvenido Admin</font></font></h2>
          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mejorando tu calidad.</font><font style="vertical-align: inherit;"> De inventario</font></font></p>
          <button class="btn btn-outline-light" type="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Botón de ejemplo</font></font></button>
        </div>
</body>
</html>