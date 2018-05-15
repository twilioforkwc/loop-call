<?php
require_once './vendor/autoload.php';
use Twilio\Rest\Client;

$phone_number = array("+818012341234","+818012341234");
$phone_count = count($phone_number);
$sid = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$token = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$client = new Client($sid, $token);

if(is_null($_POST['CallStatus']) || ($_GET['index'] == 0)){
    $_GET['index'] = $phone_count;
}

if(is_null($_POST['CallStatus']) || ($_POST['CallStatus'] == "no-answer")){
    $_GET['index']--;
        $client->calls->create(
            $phone_number[$_GET['index']], "+815012341234",
            array("url" => "{{Custom URL}}",
                'timeout' => 1,
                'statusCallbackEvent' => array('initiated', 'ringing', 'answered', 'completed'),
                'statusCallback' => '{{Custom Server URL}}/loopCall.php?index='.$_GET['index'],
                'statusCallbackMethod' => 'POST',
            )
        );
}
