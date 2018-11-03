<?php

try{	// conecto a base de dados
	$db = new PDO("mysql:host=localhost;dbname=blog", "root", "Abracos1");
		// a partir daqui já tenho um objeto PDO
		
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$db = null;
	} 
	catch (PDOException $e) {
			echo "Falha de conexão: " . $e->getMessage();
	}

$dados = $db->query("SELECT * FROM posts");

//$todos = $dados->fetchAll();
//$um = $dados->fetch();
//$associativo = $dados->fetchAll(PDO::FETCH_ASSOC);
//$numerico = $dados->fetchAll(PDO::FETCH_NUM);
$obj = $dados->fetchAll(PDO::FETCH_OBJ);
echo "<pre>";
// print_r($um);
	print_r($obj);
echo "</pre>";
echo " ******************************" . "<br />";
echo $obj[0]->titulo;

/*
while( $obj = $dados->fetch(PDO::FETCH_OBJ)){
	echo $obj->id . "- ";
	echo $obj->titulo;
	echo $obj->conteudo . "<br/>";
}

$db = null;

/* $todos = $dados->fetchAll();
$um = $dados->fetch();
echo "<pre>";
print_r($todos);
echo "</pre>";
echo "<pre>";
print_r($um);
echo "</pre>";

*/
/* 
	A classe PDO permite que seja modificada a estratégia para controle de
* erros ocorridos. As possibilidade são:

    Obter os erros via métodos errorCode e errorInfo;
    Emitir WARNING nos logs; ou
    Emitir uma excessão (PDOEexception).



	Para configurar isso, basta utilizar o método setAttribute, informan-
do o valor desejado para o atributo de configuração PDO::ATTR_ERRMODE, 
que pode receber um dos seguintes valores:

    PDO::ERRMODE_SILENT - para obter os erros via errorCode e errorInfo;
    PDO::ERRMODE_WARNING - para emitir WARNING; ou
    PDO::ERRMODE_EXCEPTION: - para emitir excessões.
    
*/
