<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->descripcion : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">compras</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->descripcion : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>idproducto</label>
        <input type="text" name="idproducto" value="<?php echo $alm->idproducto; ?>" class="form-control"  placeholder="Ingrese su descripcion" data-validacion-tipo="requerido|min:1" />
    </div>
    
    <div class="form-group">
        <label>descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control"  placeholder="Ingrese su descripcion" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $alm->cantidad; ?>" class="form-control" placeholder="Ingrese cantidad" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>precio</label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese precio" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>subtotal</label>
        <input type="text" name="subtotal" value="<?php echo $alm->subtotal; ?>" class="form-control" placeholder="Ingrese subtotal" data-validacion-tipo="requerido|min:3" />
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