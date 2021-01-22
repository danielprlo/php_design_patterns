<?php

require_once('PaymentGateway.php');

class PayByPaypal implements PaymentGateway
{
    public function pay($amount)
    {
        echo "Paid $amount via Paypal \n";
    }

}
