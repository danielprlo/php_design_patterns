<?php

require_once('Order.php');
require_once('PayByDcCc.php');
require_once('PayByPaypal.php');

$order = new Order();
$order->setPaymentGateway(new PayByDcCc());
$order->pay(100);

$order = new Order();
$order->setPaymentGateway(new PayByPaypal());
$order->pay(100);
