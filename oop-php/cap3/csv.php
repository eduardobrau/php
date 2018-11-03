<?php
require_once 'classes/CSVParser.php';
$csv = new CSVParser('clientes.csv', ';');

/** @var TYPE_NAME $csv */
try{
    $csv->parse();

    //$res = $csv->fetch();
    //echo '<pre>'; print_r($res); echo '</pres>';

    while ($row = $csv->fetch()) {
        print $row['Cliente'] . " - ";
        print $row['Cidade'] . "<br>\n";
    }
}catch (Exception $e){
  print $e->getMessage() .' confira a linha '. $e->getLine() . '<br />';
}

echo 'teste.php';
