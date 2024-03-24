<?php
session_start();

echo "<h2> Your order qty is " . $_SESSION['selqty'];
echo "<h2> And the selected colour is {$_POST['selcolour']}.</h2>";

?>