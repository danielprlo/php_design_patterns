<?php

require_once ('CourierClient.php');
require_once ('GroundCourier.php');

\CourierClient::deliverCourier(new \GroundCourier());

\CourierClient::deliverCourier(new \AirCourier());
