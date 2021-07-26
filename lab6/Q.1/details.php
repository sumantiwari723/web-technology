<?php 
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College Of Engineering And Science";
$gces->address = "Lamachaur";


array_push($gces->employees, new Employee("Nishal", "MustangChowk"));
array_push($gces->employees, new Employee("Abhishek", "Pokhara"));
array_push($gces->employees, new Employee("Bandana", "Lekhnath"));
array_push($gces->employees, new Employee("Ram", "Mustang"));

//<?= $gces->name ?>
 


<!-- var_dump($gces);
 -->
<!DOCTYPE html>
<html>
<head>
	<title>html</title>
</head>
<body>
 <h1>Details:</h1>
 <p>Name of the company:<b><?php echo $gces->name ?></b></p>
 <p>Address:<b><?php echo $gces->address ?></b></p>
 <!-- <p>Number of employees:<b><?php echo $gces->employee?></b></p> -->

 <table border = 1>
    <thead>
    <tr>
        <th>Name</th>
        <th>Address</th>
    </tr>
    </thead>
   
    <tbody>
    <?php
    foreach($gces->employees as $employee) {  
    ?>
    <tr>
    <td><?=$employee->name?></td>
    <td><?=$employee->address?></td>
    </tr>
    <?php } ?>
    </tbody>
    
    </table>
</body>
</html>
