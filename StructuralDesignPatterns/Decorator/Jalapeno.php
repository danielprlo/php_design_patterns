<?php

include_once('PizzaToppings.php');

class Jalapeno extends PizzaToppings
{
    public function getDesc(): string
    {
        return parent::getDesc() . 'Jalapeno ';
    }
}
