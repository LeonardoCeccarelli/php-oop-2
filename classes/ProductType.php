<?php
require_once __DIR__ . "/Product.php";

class ProductType extends Product
{
    protected $type = [];

    function __construct(array $_data)
    {
        parent::__construct($_data);
        $this->setType($_data["type"]);
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
