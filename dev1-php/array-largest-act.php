<?php
    $num = [15,100, 32.7, 200.01, 13.09, 130.5, 4, 20.02];
    $largest = NULL; //NULL means empty or no value

    foreach($num as $x)
    {
        if($largest < $x)
        {
            $largest = $x;
        }
    }

    echo "<p>The largest value is $largest</p>";

    echo max($num); //returns the largest value from an array
?>