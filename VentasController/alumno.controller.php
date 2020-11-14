<?php
require_once 'model/vents.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new product();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cruds/ventass.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new product();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
       
        require_once 'view/header.php';
        require_once 'view/cruds/ventas-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new product();
        
        $alm->id = $_POST['id'];
        $alm->idcliente = $_POST['idcliente'];
         $alm->idproducto = $_POST['idproducto'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->producto =$_REQUEST['producto'];
         $alm->direccion =$_REQUEST['direccion'];
          $alm->telefono =$_POST['telefono'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: ventas.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ventas.php');
    }
}
