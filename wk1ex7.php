<html>
<body>
<?php
	
    //assigning the variables
    $hourlyrate	= 5.75;
	$hoursperweek = 40;
    $tax_rate = 0.22;
	
    //gross claculation
    $gross = $hourlyrate * $hoursperweek;

    //tax claculation
    $tax_amount = $gross * $tax_rate;
    
    //net claculation
    $net = $gross - $tax_amount;
	
    echo "Gross: $". $gross . "<br>";
    echo "Tax amount: $" . $tax_amount . "<br>";
    echo "Net wage: $" . $net . "<br>";
?>
</body>
</html>