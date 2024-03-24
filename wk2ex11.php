<?php
    $mymarks["Co564"] = 70;
    $mymarks["Co565"] = 75;
    $mymarks["Co566"] = 80;
    $mymarks["Co567"] = 85;
    $mymarks["Co568"] = 90;
    $mymarks["Co569"] = 95;

    foreach ($mymarks as $index => $mark) {
        echo "Module code: $index<br/>";
        echo "Mark: $mark <br/>";
    }

    $total = 0;
    foreach ($mymarks as $index => $mark) {
        $total = $total + $mymarks[$index];

    }
    $average = $total / 6;


    echo "Average mark: $average";
    
?>   
