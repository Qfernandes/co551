<?php
session_start();

$totalPrice = $_SESSION['totalPrice'];

echo "<h2>Your order qty is " . $_SESSION['selqty'] . "</h2>";
echo "<h2>And the selected colour is {$_POST['selcolour']}.</h2>";
echo "<h2>Order total price " . $_SESSION['totalPrice'] . "</h2>";
?>
