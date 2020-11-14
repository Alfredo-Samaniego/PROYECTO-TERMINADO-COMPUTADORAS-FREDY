<?php
class almac
{
	private $pdo;
    
    public $id;
    public $idadm;
    public $idprovedor;
    public $idproducto;
    public $nombre;
    public $cantidad;
    public $precio;
    public $preciov;
    public $fecha;
    public $recibio;

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

			$stm = $this->pdo->prepare("SELECT * FROM almacen");
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
			          ->prepare("SELECT * FROM almacen WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM almacen WHERE id = ?");			          

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
			$sql = "UPDATE almacen SET 
                                                idadm        = ?, 
                                                idprovedor        = ?, 
                                                idproducto        = ?, 
						nombre        = ?, 
						cantidad        = ?,
                                                precio        = ?,
                                                preciov   = ?,
                                                fecha    = ?,
                                                recibio    = ?,
				    WHERE idalmacen = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $data->idadm,
                    $data->idprovedor,
                    $data->idproducto,                    
                    $data->nombre,
                    $data->cantidad, 
                    $data->precio,
                    $data->preciov, 
                    $data->fecha,
                    $data->recibio,                     
                     
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(almac $data)
	{
		try 
		{
		$sql = "INSERT INTO almacen (idadm,idprovedor,idproducto,nombre,cantidad,precio,preciov,fecha,recibio) 
		        VALUES (?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->idadm,
                    $data->idprovedor,
                    $data->idproducto,                 
                    $data->nombre,
                    $data->cantidad, 
                    $data->precio,
                    $data->preciov, 
                    $data->fecha,
                    $data->recibio,                  
               
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}