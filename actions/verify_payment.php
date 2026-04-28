<?php
session_start();
require('../config/razorpay.php');
include("../config/db.php");

use Razorpay\Api\Errors\SignatureVerificationError;

try{

$api->utility->verifyPaymentSignature([
'razorpay_order_id'=>$_GET['oid'],
'razorpay_payment_id'=>$_GET['pid'],
'razorpay_signature'=>$_GET['sig']
]);

$total=0;
foreach($_SESSION['cart'] as $id=>$q){
$r=$conn->query("SELECT * FROM products WHERE id=$id");
$p=$r->fetch_assoc();
$total+=$p['price']*$q;
}

$conn->query("INSERT INTO orders(total,payment_id,order_id,status) 
VALUES($total,'".$_GET['pid']."','".$_GET['oid']."','success')");

unset($_SESSION['cart']);

header("Location: ../pages/success.php");

}catch(SignatureVerificationError $e){
echo "Payment Failed";
}