<h1 class="page-header">PRODUCTOS</h1>
<style>
    h1{
        text-align: center;
    }
</style>
<div class="well well-sm text-right">
      <a class="btn btn-success" href="?c=Alumno&a=Crud">Nuevo Producto</a>
      <a class="btn btn-warning" href="reportproductos.php">Generar Reporte</a>
      <a class="btn btn-danger" href="administrador.php">regresar</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">descripcion</th>
            <th>precio</th>  
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->descripcion; ?></td>
            <td><?php echo $r->precio;?></td>
            
            <td>
                <a href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
