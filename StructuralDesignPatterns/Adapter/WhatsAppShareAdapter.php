<?php

include_once('Share.php');

class WhatsAppShareAdapter implements Share
{
    private $whatsapp;
    private $data;

    public function __construct(WhatsAppShare $whatsapp, String $data) {
        $this->whatsapp = $whatsapp;
        $this->data = $data;
    }

    public function shareData()
    {
        $this->whatsapp->waShare($this->data);
    }
}
