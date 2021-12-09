<?php
require_once __DIR__ . "/../traits/Cart.php";

class User
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $metodPayment;
    protected $email;

    use Cart;

    function __construct(array $_data)
    {
        $this->setName($_data["name"]);
        $this->setLastName($_data["lastName"]);
        $this->setAge($_data["age"]);
        $this->setEmail($_data["email"]);
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

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // public function getCartLength()
    // {
    //     if (count($this->cart) === 0) {
    //         return "Vuoto";
    //     }
    //     return count($this->cart);
    // }

    // public function pushItemOnCart($item)
    // {
    //     $this->cart[] = $item;
    // }

    // public function getCartItems()
    // {
    //     return $this->cart;
    // }
}
