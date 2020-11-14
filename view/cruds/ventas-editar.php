<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->idcliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">ventas</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->idcliente : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="" value="<?php echo $alm->id; ?>" />
     <div class="form-group">
        <label>idcliente</label>
        <input type="text" name="idcliente" value="<?php echo $alm->idcliente; ?>" class="form-control" placeholder="Ingrese idcliente" data-validacion-tipo="requerido|min:1" />
    </div>
     <div class="form-group">
        <label>idproducto</label>
        <input type="text" name="idproducto" value="<?php echo $alm->idproducto; ?>" class="form-control" placeholder="Ingrese idproducto" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>producto</label>
        <input type="text" name="producto" value="<?php echo $alm->producto; ?>" class="form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>direccion</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese la direccion" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>telefono</label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese telefono" data-validacion-tipo="requerido|min:3" />
    </div>
    
  
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>