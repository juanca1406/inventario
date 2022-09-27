<?php
    $codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$categoria= $_POST['categoria'];
	$preciocosto= $_POST['preciocosto'];
	$imagen= $_POST['imagen'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM productos WHERE codigo='$codigo'");
	$check_mail=mysqli_num_rows($checkemail);
		if($codigo==$codigo){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el Codigo designado para un producto");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO productos VALUES('','$codigo','$nombre','$precio','$categoria','$preciocosto'),'$imagen')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("El producto se a registrado con éxito");</script> ';
				
			}
        }
?>