<?php
class compr
{
	private $pdo;
    
    public $id;
    public $idproducto;
    public $descripcion;
    public $cantidad;
    public $precio;
    public $subtotal;

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

			$stm = $this->pdo->prepare("SELECT * FROM compra");
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
			          ->prepare("SELECT * FROM compra WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM compra WHERE id = ?");			          

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
			$sql = "UPDATE compra SET 
                                                idproducto         = ?, 
						descripcion         = ?, 
						cantidad        = ?,
                                                precio        = ?,
                                                subtotal     = ?,
                        
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $data->idproducto,                    
                    $data->descripcion,
                    $data->cantidad, 
                    $data->precio,
                    $data->subtotal, 
                     
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(compr $data)
	{
		try 
		{
		$sql = "INSERT INTO compra (idproducto,descripcion,cantidad,precio,subtotal) 
		        VALUES (?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idproducto,                 
                    $data->descripcion,
                    $data->cantidad, 
                    $data->precio,
                    $data->subtotal,                 
               
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}