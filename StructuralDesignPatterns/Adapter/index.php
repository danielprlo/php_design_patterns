<?php

include_once('WhatsAppShare.php');
include_once('WhatsAppShareAdapter.php');
include_once('Share.php');

//The client must use only the Share interface
function clientCode(Share $share) {
    $share->shareData();
}

$wa = new WhatsAppShare();
$waShare = new WhatsAppShareAdapter($wa, 'Hello Whatsapp');

// The Client just executes the sending of the data, but the adapter takes care
// of the logic needed for that data to be sent
clientCode($waShare);
