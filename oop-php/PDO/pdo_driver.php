<?php
//Para saber se os drivers est�o funcionando
foreach(PDO::getAvailableDrivers() as $driver){
  echo $driver.'<br />'; //ser� exibido uma lista com os drivers instalado
}
?>
