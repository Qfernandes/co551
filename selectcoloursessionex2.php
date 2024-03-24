<?php
session_start();

$selectedQty = $_POST['selqty'];
$price = 15.75;
$totalPrice = $selectedQty * $price;
$_SESSION['totalPrice'] = $totalPrice;
$_SESSION['selqty'] = $selectedQty;
?>

<html>
  <head>
    <title>Select colour page</title>
  </head>
  <body>
    <form action="confirmationsessionex2.php"  method="post">
      Select the colour for the <?php echo $_POST["selqty"]; ?> widgets you are ordering
      <select name="selcolour">
        <option>white</option>
        <option>red</option>
        <option>yellow</option>
        <option>green</option>
        <option>blue</option>
      </select>
      <br/><br/>  
      <input type="submit" value="Buy"/>
    </form>
  </body>
</html>


