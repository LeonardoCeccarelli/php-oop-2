<?php

class User
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $metodPayment;
    protected $cart;

    function __construct(string $_name, string $_lastName, int $_age, array $_cart)
    {
        $this->setName($_name);
        $this->setLastName($_lastName);
        $this->setAge($_age);
        $this->setCart($_cart);
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setAge($num)
    {
        $this->age = $num;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setCart($array)
    {
        $this->cart = $array;
    }

    public function getCartLength()
    {
        if (count($this->cart) === 0) {
            return "Vuoto";
        }
        return count($this->cart);
    }

    public function pushItemOnCart($item)
    {
        $this->cart[] = $item;
    }

    public function getCartItems()
    {
        return $this->cart;
    }
}
