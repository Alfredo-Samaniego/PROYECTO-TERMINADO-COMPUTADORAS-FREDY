<?php
require_once 'model/aadm.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new clint();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cruds/admm.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new clint();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
       
        require_once 'view/header.php';
        require_once 'view/cruds/adm-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new clint();
        
        $alm->id = $_POST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellido =$_REQUEST['apellido'];
         $alm->direccion =$_REQUEST['direccion'];
          $alm->telefono =$_POST['telefono'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: adm.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: adm.php');
    }
}
