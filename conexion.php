<?php

$conn = new PDO ('mysql:host=localhost;dbname=inventario;charset=utf8mb4', 'root', '',array(PDO::ATTR_EMULATE_PREPARES => false, 
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

define("KEY","develoteca");
define("COD","AES-128-ECB");


?>  