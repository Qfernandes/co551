<?php
	include("myfunctions.inc");
	html_header("My second function demo");
    echo "<br/><br/>Salary = £2000<br/>Tax threshold=£1000<br/>Tax rate = 40%<br/><br/>";
	echo "I pay " . calculatetax(2000,40,1000) . " tax";
	html_footer();
?>

