<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->idadm : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">ALMACEN</a></li>
  <li class="active"><?php echo $alm->id!= null ? $alm->idadm : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="" value="<?php echo $alm->id; ?>" />
     <div class="form-group">
        <label>idadm</label>
        <input type="text" name="idadm" value="<?php echo $alm->idadm; ?>" class="form-control"  placeholder="Ingrese idadm" data-validacion-tipo="requerido|min:1" />
    </div>
     <div class="form-group">
        <label>idprovedor</label>
        <input type="text" name="idprovedor" value="<?php echo $alm->idprovedor; ?>" class="form-control"  placeholder="Ingrese idprovedoro" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>idproducto</label>
        <input type="text" name="idproducto" value="<?php echo $alm->idproducto; ?>" class="form-control"  placeholder="Ingrese idproducto" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>nombre producto</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control"  placeholder="Ingrese su nombre de producto" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $alm->cantidad; ?>" class="form-control" placeholder="Ingrese cantidad" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>precio</label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese precio" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>precio venta</label>
        <input type="text" name="preciov" value="<?php echo $alm->preciov; ?>" class="form-control" placeholder="Ingrese precio venta" data-validacion-tipo="requerido|min:3" />
    </div>
  <div class="form-group">
        <label>fecha</label>
        <input readonly type="text" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control datepicker" placeholder="Ingrese  fecha " data-validacion-tipo="requerido" />
    </div>
  <div class="form-group">
        <label>recibio</label>
        <input type="text" name="recibio" value="<?php echo $alm->recibio; ?>" class="form-control" placeholder="Ingrese nombre de recibido" data-validacion-tipo="requerido|min:3" />
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