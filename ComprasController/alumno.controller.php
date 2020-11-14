<?php
require_once 'model/comps.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new compr();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cruds/comprass.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new compr();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
       
        require_once 'view/header.php';
        require_once 'view/cruds/compra-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new compr();
        $alm->id = $_POST['id'];
        $alm->idproducto =$_REQUEST['idproducto'];
        $alm->descripcion =$_REQUEST['descripcion'];
        $alm->cantidad =$_REQUEST['cantidad'];
        $alm->precio =$_REQUEST['precio'];
        $alm->subtotal =$_REQUEST['subtotal'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: compras.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: compras.php');
    }
}
