<?php
ini_set('display_errors', 1);

$ConnPdo = new PDO('mysql:host=localhost;dbname=blog', 'root','Abracos1');

$sql = "SELECT * FROM posts";
//$query = $ConnPdo->query($sql);
$dados = null;
$statement = $ConnPdo->prepare($sql);
$statement->execute($dados);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

//$result = $query->fetchAll(PDO::FETCH_ASSOC); //fetchAll();
// echo "<pre>";
//print_r($result); 
//echo $result;
foreach($data as $blog){
	echo $blog['titulo'] . "<br/>"; 
}
// echo "</pre>";
?>

