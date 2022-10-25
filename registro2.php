<?php
include('conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $preciocosto = $_POST['preciocosto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp, png';
          $_SESSION['tipo'] = 'danger';
          header('location:agregar.php');
       }else{
         $query = "INSERT INTO productos(codigo,nombre,precio,categoria,preciocosto,imagen,descripcion,cantidad) values('$codigo','$nombre','$precio','$categoria','$preciocosto','$imagen','$descripcion',($cantidad)";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
            move_uploaded_file($temp,'imagenes/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:agregar.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}

