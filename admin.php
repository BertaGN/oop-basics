<?php
require_once("person.php");


class Admin extends Person{

    public $role;
    public function __construct($name, $lastName, $age, $role){
        parent::__construct($name, $lastName, $role);
        $this->role = $role;
       
    }

    
}

?>