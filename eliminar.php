<?php

    include("conexion.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM productos WHERE id = $id";

    if(mysqli_query($conn, $sql)){
        echo '<script language="javascript">';
          echo 'alert("Tu producto ha sido eliminado!");';
          echo 'window.location="inventario.php";';
          echo '</script>';
      } else {
          echo '<script language="javascript">';
          echo 'alert("Error eliminando tu producto!");';
          echo 'window.location="inventario.php;';
          echo '</script>';
      }
?>