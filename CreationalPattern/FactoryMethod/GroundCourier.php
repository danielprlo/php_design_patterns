<?php

require_once('Courier.php');
require_once('TruckTransport.php');
require_once('Transport.php');

class GroundCourier extends Courier
{
    function getCourierTransport(): Transport
    {
        return new TruckTransport();
    }
}
