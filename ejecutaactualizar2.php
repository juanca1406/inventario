<?php
include('connect_db.php');
if(isset($_POST['Guardar'])){
	$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $preciocosto = $_POST['preciocosto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
   
         $query = "UPDATE productos SET id='$id', codigo='$codigo', nombre='$nombre', precio='$precio', categoria='$categoria', preciocosto='$preciocosto', descripcion='$descripcion', cantidad='$cantidad' WHERE id='$id'";
         $resultado = mysqli_query($mysqli,$query);
         if($resultado){
                header('location:inventario.php');
         }else{
            echo "Error";
         }
        }
?>

