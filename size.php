<?php
session_start();

$_SESSION['selqty'] = $_POST['selqty'];
?>

<html>
 <head>
  <title>Size Selection Page</title>
 </head>
 <body>
  <form action="selectcoloursessionex3.php" method="post">
   Select the size of widgets you require:
   <select name="selsize">
    <option value="small">Small-15.75</option>
    <option value="medium">Medium-16.75</option>
    <option value="large">Large-17.75</option>
    <option value="extralarge">Extra Large-18.75</option>
   </select>
   <br/><br/>	
   <input type="submit" value="Next"/>
  </form>
 </body>
</html>
