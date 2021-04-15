<?php

/**
 * Clase Modelo tipo de estados
 */
class usersModel
{

  private $pdo;

    public function __construct()
    {
    	try {
    		$this->pdo = new Database;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    }
    }

    public function getAll()
    {
    	try {
    		$strSql = "SELECT * FROM user";
    		return $this->pdo->select($strSql);
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
    }
		public function newUsers($data)
{
		try {
				$this->pdo->insert("user",$data);
		} catch(PDOException $e) {
				die($e->getMessage());
		}
}
public function getById($id)
{
	 try {
				$strSql = "SELECT * FROM user WHERE idUser=:idUser";
				$arrayData = ['idUser' => $id];
				return $this->pdo->select($strSql, $arrayData);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
public function editUsers($data)
{
		try {
				$strWhere = 'idUser = '. $data['idUser'];
				$table = 'user';
				$this->pdo->update($table, $data, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
public function deleteUsers($data)
{
		try {
				$strWhere = 'idUser = '. $data['idUser'];
				$table = 'user';
				$this->pdo->delete($table, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
}
