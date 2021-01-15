<?php

require_once('Transport.php');
require_once('Courier.php');

class AirCourier extends Courier
{
    function getCourierTransport(): Transport
    {
        return new PlaneTransport();
    }

}
