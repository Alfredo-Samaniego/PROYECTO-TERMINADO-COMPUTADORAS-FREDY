<?php
require_once 'model/produ.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new product();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cruds/productss.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new product();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
       
        require_once 'view/header.php';
        require_once 'view/cruds/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new product();
        
        $alm->id = $_REQUEST['id'];
        $alm->descripcion = $_REQUEST['descripcion'];
        $alm->precio =$_POST['precio'];
        

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: agregpro.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: agregpro.php');
    }
}
