<?php
require_once("person.php");


class Admin extends Person{

    public static $role;
    public function __construct(string $name, string $lastName, int $age, string $role){

        parent::__construct($name, $lastName, $age, $role);
        self::$role = $role;
       
    }
    public function getRole(){
        return self::$role;
    }

    public function getName(){
        return "The Person name is". Person::getName();
    }

    public function __destruct(){
        echo "<br><br>DESTR : <br>", Person::getName();
          
    }

    
}



?>