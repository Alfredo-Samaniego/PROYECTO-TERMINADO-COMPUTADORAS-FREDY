<?php
require_once 'model/prove.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new prove();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cruds/provedorss.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new prove();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
       
        require_once 'view/header.php';
        require_once 'view/cruds/provedores-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new prove();
        
        $alm->id = $_POST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->empresa =$_REQUEST['empresa'];
         $alm->direccion =$_REQUEST['direccion'];
          $alm->telefono =$_POST['telefono'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: provedores.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: provedores.php');
    }
}
