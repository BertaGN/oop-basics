<?php
require_once("admin.php");



$Berta = new Person("Berta", "Garcia", 29);
echo "Name : " . $Berta->getName() . "<br>";
echo "Last Name : " . $Berta->getLastName() . "<br>";
echo "Age : " . $Berta->getAge() . "<br>";


$admin = new Admin("Berta", "Garcia", 29, "admin");
echo "Role :" .$admin->getRole();
echo $admin->getName();






?>