<?php 
// Chiphysi programación suscribete -->
// V 0.1 original -->
// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
// Derechos de autor(Suscribete)  -->

session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito</title>

    <link rel="stylesheet" href="estilocarri.css">
    <link href="libscarrito/css/bootstrap.css" rel="stylesheet">
    <script src="libscarrito/js/jquery.js"></script>
    <script src="libscarrito/js/jquery-1.8.3.min.js"></script>
    <script src="libscarrito/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libscarrito/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	

    <link rel="stylesheet" href="libscarrito/js/alertify/themes/alertify.core.css" />
    <link rel="stylesheet" href="libscarrito/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libscarrito/js/alertify/lib/alertify.min.js"></script>

  </head>


  <style>
  	
body{

	background: #E0E4E5;



}
  </style>

  <body>
 	<div class="container">
 		
 		<div class="page-header">
			<center><h1><font color="black" size="10" face="">CARRITO DE COMPRAS</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="black" size="6" face="">PRODUCTO:</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione un producto</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="black" size="6" face="">CANTIDAD:</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				<div style="margin-top: 35px;">
				<button type="button" class="btn btn-primary btn-agregar-producto">AGREGAR</button>
				</div>
			</div>
                    
			<div class="col-md-1">
                            <a href="carritoo.php">
				<div style="margin-top: 35px;">
				<button type="button" class="btn btn-danger ">REFRESH</button>
				</div>
			    </a>
			</div>
			<div class="col-md-1">
				<a href="detalle.php">
				<div style="margin-top: 35px;">
				<button type="button" class="btn btn-info ">DETALLES</button>
				</div>
			    </a>
			</div>
                        <div class="col-md-1">
                            <a href="index.php">
				<div style="margin-top: 35px;">
				<button type="button" class="btn btn-warning ">REGRESAR</button>
				</div>
			    </a>
			</div>



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6" face="" >Productos</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
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
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['precio'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" face="" > No hay productos agregados </font></div>
				<?php }?>
			</div>
		</div>
	</center>
 	</div>
 	<center>
 	<div class="col-md-12">
				<a href="detalle2.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-warning "><font size="6" face="">COMPRAR</font></button>
				</div>
			    </a>
			</div>
	</center>
  
  
  <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
  
  
  
   <footer>
             <div class="container-footer-all">
             <div class="container-body">
                 <div class="column1">
                     <h2>Acerca De Computadoras Fredy</h2>
                   
                     <div class="row">
                         <img src="icon/acerca.png">
                         <label><a href="Acercaempresa.php">Acerca de Nosotros</a></label>
                     </div>
                      <div class="row">
                          <img src="icon/cont.png">
                          <label><a href="Contacto.php">Contacto</a></label>
                     </div>
                      <div class="row">
                          <img src="icon/polipriv.png">
                          <label><a href="PoliticasdePrivacidad.php">Políticas de privacidad</a></label>
                     </div>
                     <div class="row">
                         <img src="icon/polidev.png">
                         <label><a href="Politicas envio y devoluciones.php">Políticas de envió y devoluciones</a></label>
                     </div>
                     <div class="row">
                         <img src="icon/poligar.png">
                         <label><a href="Politicasdegarantia.php">Políticas de garantía</a></label>
                     </div>
                     <div class="row">
                         <img src="icon/pre.png">
                         <label><a href="Preguntas.php">Preguntas Frecuentes</a></label>
                     </div>
                 </div>
                 <div class="column2">
                     <h2>Redes Sociales</h2>
                     <div class="row">
                         <img src="icon/facebook_108044.png">
                         <label><a href="#">Siguenos en Facebook</a></label>
                     </div>
                      <div class="row">
                          <img src="icon/twitter.png">
                          <label><a href="#">Siguenos en Twitter</a></label>
                     </div>
                      <div class="row">
                          <img src="icon/instagram_108043.png">
                          <label><a href="#">Siguenos en Instagram</a></label>
                     </div>
                      <div class="row">
                          <img src="icon/whatsapp_108042.png">
                          <label><a href="#">Siguenos en WhatsApp </a> </label>
                     </div>
                      <div class="row">
                          <img src="icon/messengerf_108040.png">
                          <label><a href="#">Siguenos en Messenger</a></label>
                     </div>
                      <div class="row">
                          <img src="icon/youtube_108041.png">
                          <label><a href="#">Siguenos en Youtube</a></label>
                     </div>
                 </div>
                 <div class="column3">
                     <h2>Informacion De Contactos</h2>
                     <div class="row2">
                         <img src="icon/cas.png">
                         <label>Velardeña Dgo Las cuadras local #16</label>
                         
                     </div>
                      <div class="row2">
                          <img src="icon/cel.png">
                         <label>8715655601</label>
                         
                     </div>
                      <div class="row2">
                          <img src="icon/email.png">
                         <label>samaniegofredy@gmail.com</label>
                         
                     </div>
                     
                 </div>
             </div>
             
             </div>    
             <div class="container-footer">
                 <div class="footer">
                 <div class="copyright">
                     ©2020 Todos Los Derechos Reservados|<a href="">ComputadorasFredy</a>
                 </div>
                 <div class="Information">
                     <a href="">Informacion Compañia</a>|<a href="">Privacion y Politica</a>|<a href="">Terminos y Condiciones</a>
                 </div>
                 </div>
             </div>
         </footer>
  
  
  
  
  
  
  </body>
</html>
