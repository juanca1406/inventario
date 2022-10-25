<?php
include('connect_db.php');
if(isset($_POST['Guardar'])){
	$id = $_POST['id'];
    $imagen = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $temp  = $_FILES['imagen']['tmp_name'];

         $query = "UPDATE productos SET id='$id', imagen='$imagen' WHERE id='$id'";
         $resultado = mysqli_query($mysqli,$query);
         if($resultado){
           
             header('location:inventario.php');
             move_uploaded_file($temp,'imagenes/'.$imagen);   
         }
        }

?>

