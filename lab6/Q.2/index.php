<?php

$counter = 0;
for ($i = 1; $i <= 100; $i++)
if ($i % 2 == 0){
	echo ($i)." ";
	$counter++;
	if ($counter == 20){
		die();
	}
}
?>
