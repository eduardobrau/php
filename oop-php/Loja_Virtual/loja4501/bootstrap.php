<?php

require('config.php');

session_start();

function appload($classe) {
	$dir = dirname(__FILE__);
	$arquivo = "$dir/app/$classe.php";
	
	if(file_exists($arquivo)) {
		require_once($arquivo);
		return true;
	}
}

function modload($classe) {
	$dir = dirname(__FILE__);
	$arquivo = "$dir/app/modules/$classe.php";
	
	if(file_exists($arquivo)) {
		require_once($arquivo);
		return true;
	}
}

function libload($classe) {
	$dir = dirname(__FILE__);
	$arquivo = "$dir/lib/$classe.php";
	
	if(file_exists($arquivo)) {
		require_once($arquivo);
		return true;
	}
}

spl_autoload_register('appload');
spl_autoload_register('modload');
spl_autoload_register('libload');
