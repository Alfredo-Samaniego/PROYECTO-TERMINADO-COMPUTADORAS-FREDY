<h1 class="page-header">ALMACEN</h1>
<style>
    h1{
        text-align: center;
    }
</style>

<div class="well well-sm text-right">
    <a class="btn btn-success" href="?c=Alumno&a=Crud">Nuevo dato</a>
    <a class="btn btn-warning" href="reportalmacen.php">Generar Reporte</a>
    <a class="btn btn-danger" href="administrador.php">regresar</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">idadm</th>
            <th>idadm</th>
            <th>idprovedor</th>
            <th>idproducto</th> 
            <th>nombre</th> 
            <th>cantidad</th> 
            <th>precio</th>
            <th>preciov</th>  
            <th>fecha</th>
            <th>recibio</th> 
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idadm; ?></td>
             <td><?php echo $r->idprovedor; ?></td>
              <td><?php echo $r->idproducto; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->cantidad; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->preciov; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->recibio; ?></td>
           
            
            
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
