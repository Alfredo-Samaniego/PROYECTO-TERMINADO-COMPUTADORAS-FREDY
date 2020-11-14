<?php
class product
{
	private $pdo;
    
    public $id;
    public $idcliente;
    public $idproducto;
    public $nombre;
    public $producto;
    public $direccion;
    public $telefono;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM ventas");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM ventas WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM ventas WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE ventas SET 
                                                id       = ?, 
                                                idcliente       = ?, 
                                                idproducto       = ?, 
						nombre         = ?, 
						producto        = ?,
                                                direccion        = ?,
                                                telefono       = ?,
                        
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $data->idcliente,
                    $data->idproducto,                    
                    $data->nombre,
                    $data->producto, 
                    $data->direccion,
                    $data->telefono, 
                     
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(product $data)
	{
		try 
		{
		$sql = "INSERT INTO ventas (idcliente,idproducto,nombre,producto,direccion,telefono) 
		        VALUES (?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idcliente,  
                    $data->idproducto,                    
                    $data->nombre,
                    $data->producto, 
                    $data->direccion,
                    $data->telefono,                 
               
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}