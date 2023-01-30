
<?php

require_once('classAdmin.php');

$Berta = new User("Berta", "Garcia", 29, "Spain", "Female", 658608096);
echo "Name: ".$Berta->getName()."<br>";
echo "Last Name: ".$Berta->getLastName()."<br>";
echo "Age: ".$Berta->getAge()."<br>";
echo $Berta->getInfo();

$admin = new Admin("Berta", "Garcia", 29, "Spain", "Female", 658608096, "admin");
echo "Role: ".$admin->getRole();
echo $admin->getName();


?>