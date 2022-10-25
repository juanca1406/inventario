<?php
	session_start();
	include 'conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
            $indice =$_GET['id'];
                    $arreglo=$_SESSION['carrito'];
                    
                    array_splice($arreglo, $indice, 1);

                    $_SESSION['carrito']=$arreglo;
                    echo "elemento borrado";
                    header("Location: carrito.php");
        }
    }
    ?>