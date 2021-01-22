<?php

include_once('PizzaToppings.php');

class ExtraCheese extends PizzaToppings
{
    public function getDesc(): string
    {
        return parent::getDesc() . 'Extra cheese ';
    }
}
