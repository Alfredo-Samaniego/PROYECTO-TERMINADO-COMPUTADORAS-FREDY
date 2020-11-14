<?php
// Chiphysi programación suscribete 
// V 0.1 original 
// Autor: Chiphysi  Autor: Jhonatan Cardona  
// Derechos de autor(Suscribete)  

class Producto
{
	function get(){
		$sql = "SELECT * FROM producto";
		global $cnx;
		return $cnx->query($sql);
	}
	
	function getById($id){
		$sql = "SELECT * FROM producto WHERE id=$id";
		global $cnx;
		return $cnx->query($sql);
	}
}