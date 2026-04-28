<?php
require('../vendor/autoload.php');

use Razorpay\Api\Api;

$keyId = "YOUR_KEY_ID";
$keySecret = "YOUR_KEY_SECRET";

$api = new Api($keyId, $keySecret);
?>