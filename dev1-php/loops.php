<h1>While Loop</h1>
<?php
    $num = 1;

    while( $num < 5 ) //if the condition evaluates to FALSE, the loop stops
    {
        //while-block or loop body => place the code that you wish to run repeatedly
        echo "<p>$num: is less than 5</p>";
        $num++;
    }
?>
<hr>
<h1>Do-While Loop</h1>
<?php
    $num = 1;

    do{
        //loop body or do-block
        echo "<p>$num: is less than 5</p>";
        $num++;
    }while( $num<5 );
?>
<hr>
<h1>For Loop</h1>
<?php

    for($num = 1; $num<5; $num++)
    {
        //loop body or for-block
        echo "<p>$num: is less than 5</p>";
    }
?>


