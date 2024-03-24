<?php
session_start();
$_SESSION['selsize'] = $_POST['selsize'];
?>

<html>
  <head>
    <title>Select colour page</title>
  </head>
  <body>
    <form action="confirmationsessionex3.php"  method="post">
    Select the colour for the <?php echo $_SESSION["selqty"]; ?> widgets you are ordering
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


