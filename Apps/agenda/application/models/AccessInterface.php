<?php

interface AccessDataAgenda {
	
	public function inserir($nomeCliente, $emailCliente, $telCliente, $dataAtividde, $horaAtividade, $descricao);
	public function atualizar($id);
	public function deletar($id);
	public function listar($data);
}