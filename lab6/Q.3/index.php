<?php 
 $score = array("Ram" => "56", "Hari" => "78" ,"Shyam" => "32");
 // rsort($score);

 echo "the scores are:";
 ?> <br> <?php 

 echo "Shyam got " .$score['Shyam'];
 ?> <br> <?php
 echo "Ram got " .$score['Ram'];
 ?> <br> <?php
 echo "Hari got " .$score['Hari'];
 ?> <br> <br><?php  

 echo "use of foreach to print the marks:" ?> <br> <?php 

 foreach ($score as $s)
 {
 	echo "$s <br>";
 }

?>
