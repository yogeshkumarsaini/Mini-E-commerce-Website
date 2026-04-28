<?php
session_start();
include("../config/db.php");
include("../config/razorpay.php");

$total=0;
foreach($_SESSION['cart'] as $id=>$q){
$r=$conn->query("SELECT * FROM products WHERE id=$id");
$p=$r->fetch_assoc();
$total+=$p['price']*$q;
}

$order=$api->order->create([
'receipt'=>rand(),
'amount'=>$total*100,
'currency'=>'INR'
]);
?>

<?php include("../includes/header.php"); ?>

<h3>Total ₹<?php echo $total; ?></h3>
<button id="pay" class="btn btn-success">Pay Now</button>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var opt={
key:"<?php echo $keyId;?>",
amount:"<?php echo $total*100;?>",
order_id:"<?php echo $order['id'];?>",

handler:function(r){
window.location="../actions/verify_payment.php?pid="+r.razorpay_payment_id+"&oid="+r.razorpay_order_id+"&sig="+r.razorpay_signature;
}
};

var rzp=new Razorpay(opt);

document.getElementById('pay').onclick=function(e){
rzp.open(); e.preventDefault();
}
</script>

<?php include("../includes/footer.php"); ?>