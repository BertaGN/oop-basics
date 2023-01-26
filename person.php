<?php
class Person {
    private string $name;
    private string $lastName;

    private int $age;
    
    public function __construct($name, $lastName, $age){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
       
    }
    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }


    public function __destruct(){
        
            $this->lastName . " " .
            $this->age;
    }

    
}




?>