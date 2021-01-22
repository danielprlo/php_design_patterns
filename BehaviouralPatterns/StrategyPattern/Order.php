<?php

require_once('PaymentGateway.php');

class Order
{
    private $paymentGateway;

    public function setPaymentGateway(PaymentGateway $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount) {
        $this->paymentGateway->pay($amount);
    }

}
