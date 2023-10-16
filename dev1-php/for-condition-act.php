<?php
    for($i=1; $i<=10; $i++)
    {
        if($i%2 == 1) //check if number is odd
        {
            echo "$i-";
        }
        elseif($i%2 == 0 && $i != 10)//check if number is even
        {
            echo "$i.";
        }
        else
        {
            echo "$i";
        }
    }
?>