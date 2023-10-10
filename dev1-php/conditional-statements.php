<h1>If Statement</h1>
<?php
    $num = 1;

    if( $num > 5 ) //The condition should evaluate to either TRUE or FALSE
    {
        //if-block => the code here runs if the condition evaluates to TRUE
        echo "<p>$num is greater than 5</p>";
    }
?>
<hr>
<h2>if-greatest-act.php</h2>
<?php
    $num1 = 1000; 
    $num2 = 2000;
    $num3 = 300;

    if($num1>$num2 && $num1>$num3) //check if $num1 has the largest value
    {
        echo "<p>$num1 is the largest value</p>";
    }

    if($num2 >$num1 && $num2>$num3)//check if $num2 has the largest value
    {
        echo "<p>$num2 is the largest value</p>";
    }

    if($num3 >$num1 && $num3>$num2)//check if $num3 has the largest value
    {
        echo "<p>$num3 is the largest value</p>";
    }

?>
<hr>
<h1>If-Else Statement</h1>
<?php
    $gender = "Female";

    if( $gender == "Male" )
    {
        //if-block => the code here runs if the condition is TRUE
        echo "<p>It's a boy!</p>";
    }
    else
    {
        //else-block => the code here runs if the condition is FALSE
        echo "<p>It's a girl!</p>";
    }

    /**
     * LEAP YEAR ACTIVITY
     * To determine if the year is a leap year
     * 1. year is divisible by 4 AND NOT divisible by 100
     * OR
     * 2. year is divisible by 4, by 100 and by 400
     */
?>
<hr>
<h1>If-Elseif-Else Statement</h1>
<?php
    /**
     * pH Scale
     * 0-6 Acidic
     * 7 - Neutral
     * 8-14 Alkaline
     */

    $ph = 30;

    if(0<=$ph && $ph<=6) //check if the ph is acidic
    {
        echo "<p>$ph is acidic</p>";
    }
    elseif($ph == 7) //check if the ph is neutral
    {
        echo "<p>$ph is neutral</p>";
    }
    elseif(8<=$ph && $ph<=14) //check if the ph is alkaline
    {
        echo "<p>$ph is Alkaline</p>";
    }
    else
    {
        echo "<p>$ph is INVALID</p>";
    }
?>
