<?php
include('conexion.php');
if(isset($_POST['Guardar'])){
	$id = $_POST['id'];
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $preciocosto = $_POST['preciocosto'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_FILES['imagen']['type'];
    $temp  = $_FILES['imagen']['tmp_name'];

         $query = "UPDATE productos SET id='$id', codigo='$codigo', nombre='$nombre', precio='$precio', categoria='$categoria', preciocosto='$preciocosto', descripcion='$descripcion', imagen='$imagen' WHERE id='$id'";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
           
             header('location:inventario.php');
             move_uploaded_file($temp,'imagenes/'.$imagen);   
         }
        }

?>

