<?php 
require_once 'a.php'; 
require_once 'b.php'; 

use Application\Form as Form; 
use Application\Field as Field;

echo "<pre>" .var_dump( new Form() ). "</pre>";  // object(Application\Form)
echo "<pre>" .var_dump( new Field() ). "</pre>"; // object(Application\Field)

use Components\Form as ComponentForm;

echo "<pre>" .var_dump( new ComponentForm() ). "</pre>"; // object(Components\Form)
echo "<pre>" .var_dump( new Application\Form() ). "</pre>";
echo "<pre>" .var_dump( new Components\Form() ). "</pre>";