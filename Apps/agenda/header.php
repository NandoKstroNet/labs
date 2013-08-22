<?php
	function __autoload( $class ) {
		if( file_exists( "$class.php" ) ) {
			require "$class.php";
		}
	}

	//Procura por classe agenda após iniciar o bootstrap
	$init = new Bootstrap();
	$init->setDefaultController("agenda");
	
	//Instancia Classe Agenda
	$agenda = new Agenda();
	$resultado = $agenda->listar(date('Y-m-d'));
	$resultadoAll = $agenda->listar('NULL');

	//Atualiza status
	if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar')
	{
		$atualizar = $agenda->atualizar($_GET['id']);
		echo $atualizar;
		header("Location: http://agendatrabalhonk.com.br/");
	}

	//Deleta dados
	if(isset($_GET['acao']) && $_GET['acao'] == 'excluir')
	{
		$excluir = $agenda->deletar($_GET['id']);
		echo $excluir;
		header("Location: http://agendatrabalhonk.com.br/atividades-passadas.php");
	}
?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Agenda Trabalho</title>
	<link rel="stylesheet" href="style.css" media="all">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/maskedinput.min.js"></script>
	<script type="text/javascript" src="js/masked_functions.js"></script>
</head>

<body>
	<section class="conteudo">
		<nav class="menu">
			<ul>
				<li><a href="http://agendatrabalhonk.com.br/" title="Inicio">Inicio</a></li>
				<li><a href="cadastra.php" title="Cadastre Sua Atividade">Cadastrar</a></li>
				<li><a href="atividades-passadas.php" title="#">Atividades Passadas</a></li>
			</ul>
		</nav>