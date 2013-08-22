<?php
	function __teste( $class ) {
			if( file_exists( 'application/models/'. $class . 'Model.php' ) ) {
				require 'application/models/'. $class . 'Model.php';
			}
		}
	spl_autoload_register( '__teste' );



	