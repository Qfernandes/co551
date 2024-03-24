<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmationcookies.php"  method="post">
    Select the colour for the 
    <?php $cookieName = 'selqty';
    setcookie($cookieName, $_POST['selqty']); ?>
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
