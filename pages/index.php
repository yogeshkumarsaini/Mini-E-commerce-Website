<?php include("../includes/header.php"); include("../config/db.php"); ?>

<div class="row">
<?php
$res = $conn->query("SELECT * FROM products");
while($p = $res->fetch_assoc()){
?>

<div class="col-md-3">
<div class="card mb-4">

<img src="../assets/images/<?php echo $p['image']; ?>" height="200">

<div class="card-body text-center">

<h5><?php echo $p['name']; ?></h5>
<p>₹<?php echo $p['price']; ?></p>

<div class="d-flex justify-content-center">
<button class="btn btn-secondary qty-minus">-</button>
<input class="form-control text-center mx-2 qty" value="1" style="width:60px;">
<button class="btn btn-secondary qty-plus">+</button>
</div>

<button class="btn btn-primary mt-2 add" data-id="<?php echo $p['id']; ?>">
<span class="text">Add</span>
<span class="spinner-border spinner-border-sm d-none"></span>
</button>

</div>
</div>
</div>

<?php } ?>
</div>

<?php include("../includes/footer.php"); ?>