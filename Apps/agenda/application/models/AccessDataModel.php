<?php
class AccessData {

	/**
	 *	@var string
	 **/
	protected $_hostname;
	protected $_username;
	protected $_password;
	protected $_dbname;
	protected $_dsn;

	protected function setVariaveis( $hostname, $username, $password, $dbname ) {
		$this->_hostname = $hostname;
		$this->_username = $username;
		$this->_password = $password;
		$this->_dbname 	 = $dbname;
	}

	protected function mountDsn() {
		$this->_dsn = 'mysql:host='. $this->_hostname .';dbname='.$this->_dbname;
		return $this->_dsn;
	}


	protected function setupConnection() {
 
		try {
				$conecta = new PDO( $this->mountDsn(), $this->_username, $this->_password ); 
				$conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				return $conecta;
			}
		catch(PDOexceptions $error_Conexao){
				return 'Erro ao conectar ao banco';
			}
	}

	public function runConnection() {
			$this->setVariaveis( '127.0.0.1', 'root', '', 'agenda_nandokstro' );
			$this->mountDsn();
			$conexao = $this->setupConnection();
			return $conexao;
	}
}	