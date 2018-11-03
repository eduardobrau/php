<?php
//Para saber se os drivers estão funcionando
foreach(PDO::getAvailableDrivers() as $driver){
  echo $driver.'<br />'; //será exibido uma lista com os drivers instalado
}
?>
