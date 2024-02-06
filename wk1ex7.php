<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $tax_rate = 0.22;
	$gross = $hourlyrate * $hoursperweek;

    $tax_amount = $gross * $tax_rate;
    $net = $gross - $tax_amount;
	
    echo "Gross: $". $gross . "<br>";
    echo "Tax amount: $" . $tax_amount . "<br>";
    echo "Net wage: $" . $net . "<br>";
?>
</body>
</html>