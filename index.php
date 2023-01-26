<?php
require_once("person.php");

$Berta = new Person("Berta", "Garcia", 29);
echo "Name : " . $Berta->getName() . "<br>";
echo "Last Name : " . $Berta->getLastName() . "<br>";
echo "Age : " . $Berta->getAge() . "<br>";
?>