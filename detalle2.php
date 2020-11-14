<!DOCTYPE html>

<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->

<html>
<head>
	<title>Carrito</title>

        <link href="libscarrito/css/bootstrap.css" rel="stylesheet">
        <script src="libscarrito/js/jquery.js"></script>
        <script src="libscarrito/js/jquery-1.8.3.min.js"></script>
        <script src="libscarrito/js/bootstrap.min.js"></script>
   	
        <script type="text/javascript" src="libscarrito/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	

    <link rel="stylesheet" href="libscarrito/js/alertify/themes/alertify.core.css" />
    <link rel="stylesheet" href="libscarrito/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libscarrito/js/alertify/lib/alertify.min.js"></script>

    <link rel="stylesheet" type="text/css" href="estilocompra.css">

</head>
<body>

</body>
</html>
<?php 
@session_start();
?>
<?php if(count($_SESSION['detalle'])>0){?>
	<table class="table">
	    <thead>
	        <tr>
	            <th>Descripci&oacute;n</th>
	            <th>Cantidad</th>
	            <th>Precio</th>
				<th>Subtotal</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$total = 0;
	    	foreach($_SESSION['detalle'] as $k => $detalle){ 
			$total += $detalle['subtotal'];
	    	?>
	        <tr>
	        	<td><?php echo $detalle['producto'];?></td>
	            <td><?php echo $detalle['cantidad'];?></td>
	            <td><?php echo $detalle['precio'];?></td>
				<td><?php echo $detalle['subtotal'];?></td>
	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>

                    <td><a href="carritoo.php"><button type="button" class="btn btn-warning "><font size="" color="" face="">Volver</font></button></a></td>


	        </tr>
	        <?php }?>
	        <tr>
	        	<td colspan="3" class="text-right">Total</td>
	        	<td><?php echo $total;?></td>
	        	<td></td>
	        </tr>
	    </tbody>
	</table>
	
		<div class="form">
			<form action="conexioncompra.php" method="POST">
<center>
<br>
<br>
<input type="text" name="id" placeholder="su id" required>

<input type="text" name="idproducto" placeholder="su idproducto" required>

<input type="text" name="descripción" placeholder="Descripción" required>

<input type="text" name="cantidad" placeholder="Cantidad" required>

<input type="text" name="precio" placeholder="Precio" required>

<input type="text" name="subtotal" placeholder="Subtotal" required>

<br>
<br>
<input type="text" name="id" placeholder="su id" required>

<input type="text" name="idcliente" placeholder="su idcliente" required>

<input type="text" name="idproducto" placeholder="su idproducto" required>

<input type="text" name="nombre" placeholder="su nombre" required>

<input type="text" name="producto" placeholder="su producto" required>

<input type="text" name="direccion" placeholder="su direccion" required>

<input type="text" name="telefono" placeholder="su telefono" required>
<br>
<br>
<input type="submit" value="Comprar">


</center>
			</form>
		</div>


<?php }else{?>
	<br>
	<br>
	<center>
<div class="panel-body"><font size="4" color="" face=""> No hay productos agregados</font></div>
<br>
<a href="carritoo.php">
			<button type="button" class="btn btn-warning"><font size="5" color="" face="">Regresar</font></button>
</a>
    </center>			
<?php }?>

        <script type="text/javascript" src="libscarrito/ajax.js"></script>