<?php

class CourierClient
{
    public static function deliverCourier(Courier $courier) {
        $courier->sendCourier();
    }
}
