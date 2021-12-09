<?php

trait Cart
{
    protected $cart = [];

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
