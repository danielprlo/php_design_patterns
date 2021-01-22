<?php

require_once('PaymentGateway.php');

class PayByDcCc implements PaymentGateway
{
    public function pay($amount)
    {
        echo "Paid $amount via Debit/Credit Card \n";
    }
}
