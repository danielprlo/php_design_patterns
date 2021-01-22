<?php

include_once('Pizza.php');

class PizzaToppings implements Pizza
{
    protected $pizza;

    public function __construct(Pizza $pizza){
        $this->pizza = $pizza;
    }

    public function getDesc(): string {
        return $this->pizza->getDesc();
    }

}
