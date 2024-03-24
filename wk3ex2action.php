
  <?php
  if ($_POST["txtage"] < 21  ) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  if (strtolower($_POST["txtgender"]) == "male") 
  {
	echo "You are Male <br/>";
  }
  elseif (strtolower($_POST["txtgender"]) == "female")
  {
	echo "You are Female <br/>";
  }
?>
