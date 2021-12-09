<?php
include_once __DIR__ . "/../traits/FormatFloatNum.php";
class Product
{
    protected $title;
    protected $price;
    protected $description;

    use FormatFloatNum;

    function __construct(array $_data)
    {
        $this->setTitle($_data["title"]);
        $this->setPrice($_data["price"]);
        $this->setDescription($_data["description"]);
    }

    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function setPrice($value)
    {
        $this->price = $this->formatFloatNum($value);
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getSet($value)
    {
        if (isset($value)) {
            return $value;
        }
    }
}
