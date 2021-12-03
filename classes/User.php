<?php

class User
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $metodPayment;

    function __construct(string $_name, string $_lastName, int $_age)
    {
        $this->setName($_name);
        $this->setLastName($_lastName);
        $this->setAge($_age);
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function setAge($num)
    {
        $this->age = $num;
    }
}
