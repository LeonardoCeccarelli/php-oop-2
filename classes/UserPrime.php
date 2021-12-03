<?php
require_once __DIR__ .  "/User.php";

class UserPrime extends User
{
    protected $scount = 25;

    function __construct(string $_name, string $_lastName, int $_age, array $_cart)
    {
        $this->setName($_name);
        $this->setLastName($_lastName);
        $this->setAge($_age);
        $this->setScountForAge($this->age);
        $this->setCart($_cart);
    }

    public function setScountForAge($num)
    {
        if ($num > 55) {
            $this->scount = 40;
        }
    }
}
