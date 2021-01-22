<?php

require_once('Subscriber.php');

class FoodUpdateSubscribers implements Subscriber
{

    public function update($postId)
    {
        echo "New Post with ID $postId Published \n";
    }
}
