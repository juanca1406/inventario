<?php
session_start();
$mensaje="";

if (isset($_POST['Guardar'])){
    switch($_POST['Guardar']){  
        case 'Agregar':
            if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY ))) {
                $id=openssl_decrypt($_POST['id'],COD,KEY );
                $mensaje.="OK Id Correcto".$id;
            }else{
                $mensaje.="OK Id Incorrecto".$id."<br/>";
            }
            if (is_string(openssl_decrypt($_POST['imagen'],COD,KEY ))) {
                $imagen=openssl_decrypt($_POST['imagen'],COD,KEY );
                $mensaje.="OK Imagen".$imagen."<br/>";
            }else{ $mensaje.="Upp.. Algo pasa con el imagen"."<br/>"; break;}

            if (is_string(openssl_decrypt($_POST['nombre'],COD,KEY ))) {
                $nombre=openssl_decrypt($_POST['nombre'],COD,KEY );
                $mensaje.="OK Nombre".$nombre."<br/>";
            }else{ $mensaje.="Upp.. Algo pasa con el nombre"."<br/>"; break;}

            if (is_string(openssl_decrypt($_POST['precio'],COD,KEY ))) {
                $precio=openssl_decrypt($_POST['precio'],COD,KEY );
                $mensaje.="OK precio".$precio."<br/>";
            }else{ $mensaje.="Upp.. Algo pasa con el precio"."<br/>"; break;}

            if (is_string(openssl_decrypt($_POST['cantidad'],COD,KEY ))) {
                $cantidad=openssl_decrypt($_POST['cantidad'],COD,KEY );
                $mensaje.="OK Cantidad".$cantidad."<br/>";
            }else{ $mensaje="Upp.. Algo pasa con el cantidad"."<br/>"; break;}

            if (!isset($_SESSION['carrito'])){
                $row=array(
                    'id'=>$id,
                    'imagen'=>$imagen,
                    'nombre'=>$nombre,
                    'precio'=>$precio,
                    'cantidad'=>$cantidad
                );
                $_SESSION['carrito'][0]=$row;
                $mensaje= "Producto agragado al carrito";
            }else{

                $idRow=array_column($_SESSION['carrito'],"id");
                if(in_array($id,$idRow)){
                    echo "<script>alert('El producto ya ha sido seleccionado..')</script>"; 
                    $mensaje="";
                }else{

                $numerorow=count($_SESSION['carrito']);
                $row=array(
                    'id'=>$id,
                    'imagen'=>$imagen,
                    'nombre'=>$nombre,
                    'precio'=>$precio,
                    'cantidad'=>$cantidad
                );
                $_SESSION['carrito'][$numerorow]=$row;
                $mensaje= "Producto agragado al carrito";
                }
            }
            //$mensaje= print_r($_SESSION,true);
            $mensaje= "Producto agragado al carrito";
        break;
        case "Eliminar":
            if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY ))) {
                $id=openssl_decrypt($_POST['id'],COD,KEY );

                foreach($_SESSION['carrito'] as $indice=>$row){
                    if($row['id']==$id){
                        unset($_SESSION['carrito'][$indice]);
                       
                    }
                }
            }else{
                $mensaje.="OK Id Incorrecto".$id."<br/>";
            }
                
        break;
    }
}

?>