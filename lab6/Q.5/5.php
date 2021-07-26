<?php 
 $name = array(1, 5, '$', "ram", "shyam" ,"hari", "gopal", "bishnu", "buddhi");

 sort($name);

 for ($i = 0; $i<count($name); $i++)
 {
 	echo $name[$i];
 	?><br><?php 
 }
 ?>
