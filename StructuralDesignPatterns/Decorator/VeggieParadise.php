<?php

include_once('Pizza.php');

class VeggieParadise implements Pizza
{
    public function getDesc(): string
    {
        Return 'Veggie Paradise ';
    }
}
