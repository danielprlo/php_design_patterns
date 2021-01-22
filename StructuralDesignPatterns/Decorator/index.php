<?php

include_once('Pizza.php');
include_once('Margherita.php');
include_once('ExtraCheese.php');
include_once('Jalapeno.php');

function makePizza(Pizza $pizza) {
    echo "Your order: ". $pizza->getDesc();
}

$pizza = new Margherita();
$pizza = new ExtraCheese($pizza);
$pizza = new Jalapeno($pizza);

makePizza($pizza);
