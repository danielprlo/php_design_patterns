<?php

require_once('Subscriber.php');

class HealthyMe
{
    private $subscribers = array();
    private $post;

    public function registerSubscriber(Subscriber $subs) {
        $this->subscribers[] = $subs;
        echo "Subscriber added \n";
    }

    public function notifiySubscribers() {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($this->post);
        }
    }

    public function publishPost($post) {
        $this->post = $post;
        $this->notifiySubscribers();
    }

}
