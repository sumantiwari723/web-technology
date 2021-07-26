<?php
echo "STRING FUNCTIONS:";
?> <br> <?php 
// The explode() function breaks a string into an array.
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?> <br> <?php  

// The implode() function returns a string from the elements of an array.
$arr = array('Hello','Nepal!','Its','a beauty!');
echo implode(" ",$arr);
?> <br> <?php

// The ltrim() function removes whitespace or other predefined characters from the left side of a string.
$s = "Hello World!";
echo $s . "<br>";
echo ltrim($s,"Hello");
?> <br> <?php 
?> <br> <?php 
?> <br> <?php 

echo "ARRAY FUNCTIONS:";
?> <br> <?php 

// The array() function is used to create an array.
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
?> <br> <?php 

//The array_merge() function merges one or more arrays into one array.
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?> <br> <?php 

//The array_pop() function deletes the last element of an array.
$a=array("red","green","blue");
array_pop($a);
print_r($a);
?> <br> <?php 

//The array_reverse() function returns an array in the reverse order.
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
