<?php

require_once('HealthyMe.php');
require_once('FoodUpdateSubscribers.php');

$publisher = new HealthyMe();
$subscriber = new FoodUpdateSubscribers();

$publisher->registerSubscriber($subscriber);
$publisher->publishPost(12);
