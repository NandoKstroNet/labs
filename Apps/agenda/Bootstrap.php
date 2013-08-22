<?php

//Habilitando a view de erros
	error_reporting( E_ALL | E_STRICT );
	ini_set( "display_errors", true );

//Setando o TimeZone
	date_default_timezone_set("America/Sao_Paulo");
/**
 * Classe que inicia todo o sistema de agenda
 **/
class Bootstrap {
	//Seta os controllers
	public function setDefaultController( $arq ) {
		if( file_exists( 'application/controllers/'. $arq . 'Controller.php' ) ) 
		{
			require "application/controllers/". $arq ."Controller.php";
		}
		else
		{
			echo 'Controller \'' . $arq . '\' não encontrado!';
		}
	}
}