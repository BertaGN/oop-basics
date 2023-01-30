<?php

    require_once('classUser.php');

    class Admin extends User
    {
        public $role;
        static public $isEmployee = true;
        public function __construct(string $name, string $lastName, int $age, string $country, string $gender, int $tel, string $role)
        {
            parent::__construct($name, $lastName, $age, $country, $gender, $tel);
            $this->role = $role;
            $this->country = "Private Country";
        }

        public function getRole()
        {
            return $this->role;
        }

        public function getName()
        {
            return "The user name is" . User::getName() . "from" . $this->country;
        }

        public function __destruct()
        {
            echo "<br><br>DESTR: <br>", User::getName();
        }
    }