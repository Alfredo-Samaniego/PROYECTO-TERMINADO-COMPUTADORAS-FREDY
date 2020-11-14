<?php
require_once 'model/almac.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new almac();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cruds/almacenn.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new  almac();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
       
        require_once 'view/header.php';
        require_once 'view/cruds/almacen-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new  almac();
        $alm->id = $_POST['id'];
         $alm->idadm = $_POST['idadm'];
          $alm->idprovedor = $_POST['idprovedor'];
           $alm->idproducto = $_POST['idproducto'];
        $alm->nombre =$_REQUEST['nombre'];
        $alm->cantidad =$_REQUEST['cantidad'];
        $alm->precio =$_REQUEST['precio'];
        $alm->preciov =$_POST['preciov'];
        $alm->fecha =$_REQUEST['fecha'];
        $alm->recibio =$_REQUEST['recibio'];

        $alm->id> 1 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: almacen.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: almacen.php');
    }
}
