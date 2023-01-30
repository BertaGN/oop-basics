

<?php

require_once("interfacePerson.php");

abstract class Person implements PersonIntf
{
    protected string $name;
    protected string $lastName;
    protected int $age;

    public function __construct(string $name, string $lastName, int $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    abstract public function getName();

    abstract public function getLastName();

    abstract public function getAge();

}



