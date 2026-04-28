<?php include("../includes/header.php"); include("../config/db.php"); ?>

<table class="table">
<tr><th>Name</th><th>Qty</th><th>Total</th></tr>

<?php
$total=0;
foreach($_SESSION['cart'] as $id=>$q){
$r=$conn->query("SELECT * FROM products WHERE id=$id");
$p=$r->fetch_assoc();
$sub=$p['price']*$q;
$total+=$sub;
?>

<tr>
<td><?php echo $p['name']; ?></td>
<td><?php echo $q; ?></td>
<td><?php echo $sub; ?></td>
</tr>

<?php } ?>

</table>

<h4>Total ₹<?php echo $total; ?></h4>

<a href="checkout.php" class="btn btn-success">Checkout</a>

<?php include("../includes/footer.php"); ?>