<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'menu.php';
    }else{
        header ('location: login.php');
    }
        
?>