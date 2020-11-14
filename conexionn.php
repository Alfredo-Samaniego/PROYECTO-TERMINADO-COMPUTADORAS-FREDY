<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=compusfredyy', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>