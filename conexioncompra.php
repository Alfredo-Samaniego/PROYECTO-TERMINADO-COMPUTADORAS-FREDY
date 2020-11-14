

<?php

//Chiphysi programación suscribete 
//V 0.1 original
//Autor: Chiphysi  Autor: Jhonatan Cardona  
//Derechos de autor(Suscribete)


    $usuario = "root"; //en este caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="compusfredyy"; //nombre de la base de datos



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


    $id=$_POST['id']; 
    $idproducto=$_POST['idproducto']; 
    $descripción=$_POST['descripción']; 
    $cantidad=$_POST['cantidad']; 
    $precio=$_POST['precio']; 
    $subtotal=$_POST['subtotal']; 
    $sql="INSERT INTO compra VALUES ('$id','$idproducto','$descripción','$cantidad','$precio','$subtotal')";
    
    
    
    $id=$_POST['id']; 
    $idcliente=$_POST['idcliente']; 
    $idproducto=$_POST['idproducto'];
    $nombre=$_POST['nombre']; 
    $producto=$_POST['producto']; 
    $direccion=$_POST['direccion']; 
    $telefono=$_POST['telefono']; 
    $sql1="INSERT INTO ventas VALUES ('$id','$idcliente','$idproducto','$nombre','$producto','$direccion','$telefono')";
    

    

    $ejecutar=mysqli_query($conexion, $sql);
 
    
 
    

    $ejecutar=mysqli_query($conexion, $sql1);
    


    if(!$ejecutar){
    	 echo '<script>alert("FALLO HAY ALGUN DATO MAL")</script> ';
         echo "<script>location.href='index.php'</script>";	
    }else{
        echo '<script>alert("COMPRA REALIZADA CON EXITO")</script> ';
        
        echo "<script>location.href='index.php'</script>";	
    }
     
?>﻿
