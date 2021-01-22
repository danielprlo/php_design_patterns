<?php

include_once('Pizza.php');

class Margherita implements Pizza
{
    public function getDesc(): string
    {
        Return 'Margherita ';
    }
}
