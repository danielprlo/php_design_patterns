<?php

require_once('Transport.php');

abstract class Courier
{
    //Factory method
    abstract function getCourierTransport() : Transport;

    public function sendCourier() {
        $transport = $this->getCourierTransport();
        $transport->ready();;
        $transport->dispatch();
        $transport->deliver();
    }
}
