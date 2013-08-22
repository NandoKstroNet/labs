<?php

require 'AccessInterface.php';
require 'AccessDataModel.php';

class Agenda implements AccessDataAgenda
{

	/**
	 * @var conn
	 **/
	protected $conn;

	public function __construct()
	{
		$this->conn = new AccessData();
		$this->conn = $this->conn->runConnection();
	}
	
	public function inserir( $nomeCliente, $emailCliente, $telCliente, $dataAtividde, $horaAtividade, $descricao )
	{

		$sql = "INSERT INTO ag_atividades(ativi_nomecliente, ativi_emailcliente, ativi_telefonecliente, ativi_datadaatividade, ativi_horadaatividade, ativi_descricao, ativi_status)
		 VALUES (:nomeCliente, :emailCliente, :telCliente, :data, :hora, :descricao, '1')";

		try
		{
			$connexao = $this->conn->prepare( $sql );
			$connexao->bindValue(":nomeCliente", $nomeCliente, PDO::PARAM_STR);
			$connexao->bindValue(":emailCliente", $emailCliente, PDO::PARAM_STR);
			$connexao->bindValue(":telCliente", $telCliente, PDO::PARAM_STR);
			$connexao->bindValue(":data", $dataAtividde, PDO::PARAM_STR);
			$connexao->bindValue(":hora", $horaAtividade, PDO::PARAM_STR);
			$connexao->bindValue(":descricao", $descricao, PDO::PARAM_STR);
			$connexao->execute();

			return "Atividade adicionada com sucesso!";

		}
		catch(PDOexception $errorInserir) 
		{
			return "Erro ao inserir atividade" . $errorInserir->getMessage();
		}
	}

	public function atualizar($id) 
	{
		$sql = "UPDATE ag_atividades SET ativi_status = '0' WHERE ativi_id = :id";

		try
		{
			$conexao = $this->conn->prepare($sql);
			$conexao->bindValue(":id", $id, PDO::PARAM_INT);
			$conexao->execute();

			return "Atualizado com sucesso!";
		}
		catch(PDOexception $errorUpdate)
		{
			return "Erro ao atualizar atividade" . $errorUpdate->getMessage();
		}
	}

	public function deletar($id)
	{
		$sql = "DELETE FROM ag_atividades WHERE ativi_id = :id";

		try
		{
			$conexao = $this->conn->prepare($sql);
			$conexao->bindValue(":id", $id, PDO::PARAM_INT);
			$conexao->execute();

			return "Dado apagado com sucesso!";
		}
		catch(PDOexception $errorExclui)
		{
			return "Erro ao excluir dado";
		}
	}

	public function listar($data) 
	{

		if($data == 'NULL')
		{
			$sql = "SELECT * FROM ag_atividades ORDER BY ativi_datadaatividade DESC";
		}
		else
		{
			$sql = "SELECT * FROM ag_atividades WHERE ativi_datadaatividade = :data and ativi_status = '1' ORDER BY ativi_horadaatividade ASC";
		}
		
		try
		{

			$connexao = $this->conn->prepare( $sql );
			$connexao->bindValue(":data", $data, PDO::PARAM_STR);
			$connexao->execute();
			$resultado = $connexao->fetchAll(PDO::FETCH_OBJ);
			return $resultado;

		}
		catch(PDOexception $errorLista) 
		{
			return 'Erro ao listar!';
		}		
	}
}