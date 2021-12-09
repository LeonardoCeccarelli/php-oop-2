<?php
require_once __DIR__ .  "/User.php";

class UserPrime extends User
{
    protected $scount = 25;

    function __construct(array $_data)
    {
        parent::__construct($_data);
        $this->setScountForAge($this->age);
    }

    public function setScountForAge($num)
    {
        if ($num > 55) {
            $this->scount = 40;
        }
    }
}
