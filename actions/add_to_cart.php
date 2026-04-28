<?php
session_start();

$id=$_POST['id'];
$qty=$_POST['qty'];

if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];

$_SESSION['cart'][$id]=($_SESSION['cart'][$id]??0)+$qty;

echo array_sum($_SESSION['cart']);