<?php
require_once __DIR__ . "/Product.php";

class ProductType extends Product
{
    protected $type = [];

    function __construct(string $_title, float $_price, string $_description, array $_type)
    {
        $this->setTitle($_title);
        $this->setPrice($_price);
        $this->setDescription($_description);
        $this->setType($_type);
    }

    public function setType($array)
    {
        foreach ($array as $key => $value) {
            if ($value) {
                $this->type[] = $key;
            }
        }
    }
}
