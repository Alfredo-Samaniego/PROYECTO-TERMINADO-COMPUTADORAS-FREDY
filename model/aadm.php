<?php
class clint
{
	private $pdo;
    
    public $id;
    public $nombre;
    public $apellido;
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

			$stm = $this->pdo->prepare("SELECT * FROM adm");
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
			          ->prepare("SELECT * FROM adm WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM adm WHERE id = ?");			          

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
			$sql = "UPDATE adm SET 
						nombre         = ?, 
						apellido        = ?,
                                                direccion        = ?,
                                                telefono       = ?,
                        
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $data->nombre,
                    $data->apellido, 
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

	public function Registrar(clint $data)
	{
		try 
		{
		$sql = "INSERT INTO adm (nombre,apellido,direccion,telefono) 
		        VALUES (?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido, 
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