<! - - Speed camera advise script - ->

<?php
 // 13 point is assigned and will output the result based on the point.

  $points = 13;

  if ( $points >= 12) 
{
   echo "Public transport is your best option. <br/>";
}
elseif ($points >= 9)
{
   echo "If you get caught say your grandmother was driving. <br/>";
}
else 
{
   echo "There is no need to worry about the speed limit.<br/>";
}
?>

