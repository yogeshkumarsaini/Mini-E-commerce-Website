<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>MyShop</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="index.php">🛒 MyShop</a>

<a href="cart.php" class="btn btn-warning">
Cart (<span id="cart-count">
<?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?>
</span>)
</a>
</div>
</nav>

<div class="container mt-4">