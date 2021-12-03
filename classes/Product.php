<?php
class Product
{
    protected $title;
    protected $price;
    protected $description;

    function __construct(string $_title, float $_price, string $_description)
    {
        $this->setTitle($_title);
        $this->setPrice($_price);
        $this->setDescription($_description);
    }

    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }
}
