<?php
session_start();

$selectedQty = $_SESSION['selqty'];
$selsize = $_SESSION['selsize'];
$selectedColour = $_POST['selcolour'];

switch ($selsize) {
    case "small":
        $sizePrice = 15.75;
        break;
    case "medium":
        $sizePrice = 16.75;
        break;
    case "large":
        $sizePrice = 17.75;
        break;
    case "extralarge":
        $sizePrice = 18.75;
        break;
    default:
        $sizePrice = 0;
}

$totalPrice = $selectedQty * $sizePrice;
$_SESSION['totalPrice'] = $totalPrice;
?>

<html>
<body>
    <?php echo "Selected Quantity: " . $selectedQty . "<br>"; ?>
    <?php echo "Selected Size: " . $selsize . "<br>"; ?>
    <?php echo "Selected Colour: " . $selectedColour . "<br>"; ?>
    <?php echo "Total Price: $" . number_format($totalPrice, 2) . "<br>"; ?>
</body>
</html>