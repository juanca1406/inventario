<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

</html><br>
<div style = "position:relative; left:-50px;">
    <a href="login.php"><button class="w-40 btn btn-md btn-primary" style="float: right; " type="submit">Iniciar Sesión</button></a>
</div>
<body class="text-center">

    <br><br><br>
<main class="form-signin w-30 m-auto">
    
  <form method="post" action="">
    <h1 class="h3 mb-3 fw-normal">Registrar</h1>
    <center><div class="form-floating col-md-3 mb-3">
      <input name="nombre" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Ingresa tu nombre</label>
    </div></center>
    <center><div class="form-floating col-md-3 mb-3">
      <input name="nick" type="email" class="form-control" id="floatingInput" placeholder="name@example.com"required>
      <label for="floatingInput" type="text" name="realname">Dirreción de correo</label>
    </div></center>
    <center><div class="form-floating col-md-3">
      <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password"required>
      <label for="floatingPassword">Contraseña</label>
    </div></center><br>
    <center><div class="form-floating col-md-3">
      <input name="rpass" type="password" class="form-control" id="floatingPassword" placeholder="Password"required>
      <label for="floatingPassword">Contraseña</label>
    </div></center>
    <div class="checkbox mb-3">
    </div>
    <button name="submit" class="w-40 btn btn-md btn-primary" type="submit">Registrar</button>
    <p class="mt-5 mb-3 text-muted">© 2022</p>
  </form>
</main>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>

    
  

<div class="betternet-wrapper"></div></body>