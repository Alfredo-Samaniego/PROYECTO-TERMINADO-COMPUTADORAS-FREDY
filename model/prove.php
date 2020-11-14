<?php
class prove
{
	private $pdo;
    
    public $id;
    public $nombre;
    public $empresa;
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

			$stm = $this->pdo->prepare("SELECT * FROM provedores");
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
			          ->prepare("SELECT * FROM provedores WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM provedores WHERE id = ?");			          

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
			$sql = "UPDATE provedores SET 
						nombre         = ?, 
						empresa        = ?,
                                                direccion        = ?,
                                                telefono       = ?,
                        
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $data->nombre,
                    $data->empresa, 
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

	public function Registrar(prove $data)
	{
		try 
		{
		$sql = "INSERT INTO provedores (nombre,empresa,direccion,telefono) 
		        VALUES (?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->empresa, 
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