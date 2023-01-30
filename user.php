<?php

    require_once("classPerson.php");

    class User extends Person
    {  

        public $country;
        public $gender;
        public $tel;

        public function __construct(string $name, string $lastName, int $age, string $country, string $gender, int $tel)
        {
            parent::__construct($name, $lastName, $age);
            $this->country = $country;
            $this->gender = $gender;
            $this->tel = $tel;
        }

        public function getInfo()
        {            
            return $this->country.$this->gender.$this->tel;
        }

        public function getName()
        {
            return $this->name;
        }


        public function getLastName()
        {
            return $this->lastName;
        }

        public function getAge()
        {
            return $this->age;
        }

    }