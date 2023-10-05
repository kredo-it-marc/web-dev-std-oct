<h1>Display</h1>
<?php
    echo "Hello World";
    echo "<h1>Headline 1</h1>";
    echo "Mary","Tim";

    print "Print test";
    print "<h2>Headline 2</h2>";

    echo "<p>Text 1 "."Text 2"." Text 3</p>";
?>
<hr>
<h1>Variable</h1>
<?php
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "<p>My name is $first_name $last_name. I am $age years old.</p>";
?>
<hr>
<h1>Data Type</h1>
<?php
    $str = "I am a String";
    $int = 35;
    $float_or_double = 16.001;
    $bool = FALSE;

    var_dump($str);
    echo "<br>";
    var_dump($int);
    echo "<br>";
    var_dump($float_or_double);
    echo "<br>";
    var_dump($bool);
?>

<hr>
<h1>Arithmetic Operators</h1>
<?php
    $num1 = 25;
    $num2 = 7.001;
    $num3 = 150;
    $num4 = 3001;

    $sum = $num1 + $num2; //addition
    $difference = $num2 - $num3; //subtraction
    $product = $num3 * $num4; //multiplication
    $quotient = $num4 / $num1; //division
    $remainder = $num4 % $num1; //modulo- returns the remainder

    echo "<p>The sum of $num1 and $num2 is $sum</p>";
    echo "<p>The difference of $num2 and $num3 is $difference</p>";
    echo "<p>The product of $num3 and $num4 is $product</p>";
    echo "<p>The quotient of $num4 divided by $num1 is $quotient</p>";
    echo "<p>The remainder of $num4 divided by $num1 is $remainder</p>";
?>
<hr>
<h1>Assignment Operator</h1>
<?php
    $num1 = 11;
    $num2 = 17;
    $num3 = 379.09;
    $num4 = 32;
    $num5 = 17.001;
    $num6 = 25.05;
    $num7 = 125;
    $num8 = 65;
    $num9 = 77.03;
    $num10 = 11.5;

    //display the initial value
    echo "<p>Initial value:</p>";
    echo "<p>num1: $num1</p>";
    echo "<p>num2: $num2</p>";
    echo "<p>num3: $num3</p>";
    echo "<p>num4: $num4</p>";
    echo "<p>num5: $num5</p>";
    echo "<p>num6: $num6</p>";
    echo "<p>num7: $num7</p>";
    echo "<p>num8: $num8</p>";
    echo "<p>num9: $num9</p>";
    echo "<p>num10: $num10</p>";

    //perform the assignment operators
    $num1 += $num6; //$num1 = $num1 + $num6;
    $num2 -= $num7; //$num2 = $num2 - $num7;
    $num3 *= $num8; //$num3 = $num3 * $num8;
    $num4 /= $num9; //$num4 = $num4 / $num9;
    $num5 %= $num10;//$num5 = $num5 % $num10;

    //display final value
    echo "<p>Final value:</p>";
    echo "<p>num1: $num1</p>";
    echo "<p>num2: $num2</p>";
    echo "<p>num3: $num3</p>";
    echo "<p>num4: $num4</p>";
    echo "<p>num5: $num5</p>";
    echo "<p>num6: $num6</p>";
    echo "<p>num7: $num7</p>";
    echo "<p>num8: $num8</p>";
    echo "<p>num9: $num9</p>";
    echo "<p>num10: $num10</p>";
?>

<hr>
<h1>Increment</h1>
<?php
    $x = 200;
    echo "<p>Initial Value: $x</p>"; //200
    echo "<p>Pre-increment: ".++$x."</p>";//201
    echo "<p>Post-increment: ".$x++."</p>";//201
    echo "<p>Final Value: $x</p>"; //202
?>

<hr>
<h1>Decrement</h1>
<?php
    $y = 750;
    echo "<p>Initial Value: $y</p>"; //750
    echo "<p>Pre-decrement: ".--$y."</p>"; //749
    echo "<p>Post-decrement: ".$y--."</p>"; //749
    echo "<p>Final Value: $y</p>"; //748

?>

<hr>
<h1>Comparison Operator</h1>
<?php
    $num1 = 5;
    $num2 = 5.0;
    $num3 = 77.003;
    $num4 = 1.02;

    $equal_to = ($num1 == $num2); //TRUE
    $identical = ($num1 === $num2); //FALSE
    $not_equal = ($num2 != $num3); //TRUE
    $not_equal2 = ($num3 <> $num4); //TRUE
    $greater_than = ($num3 > $num1); // TRUE
    $greater_than_or_equal_to = ($num4 >= $num1); // FALSE
    $less_than = ($num4 < $num1); // TRUE
    $less_than_or_equal_to = ($num2 <= $num3); // TRUE

    echo "<p>$num1 == $num2.0 is $equal_to</p>";
    echo "<p>$num1 === $num2.0 is $identical</p>";
    echo "<p>$num2.0 != $num3 is $not_equal</p>";
    echo "<p>$num3 <> $num4 is $not_equal2</p>";
    echo "<p>$num3 > $num1 is $greater_than</p>";
    echo "<p>$num4 >= $num1 is $greater_than_or_equal_to</p>";
    echo "<p>$num4 < $num1 is $less_than</p>";
    echo "<p>$num2.0 <= $num3 is $less_than_or_equal_to</p>";
?>
<hr>
<h1>Logical Operators</h1>
<?php
    $and = (TRUE && TRUE); //TRUE
    $and2 = (TRUE && FALSE);//FALSE
    $and3 = (FALSE && FALSE);//FALSE
    $or = (TRUE || TRUE);//TRUE
    $or2 = (TRUE || FALSE);//TRUE
    $or3 = (FALSE || FALSE);//FALSE
    $not = !TRUE;//FALSE
    $not1 = !FALSE;//TRUE

    echo "<p>TRUE && TRUE is $and</p>";
    echo "<p>TRUE && FALSE is $and2</p>";
    echo "<p>FALSE && FALSE is $and3</p>";
    echo "<p>TRUE || TRUE is $or</p>";
    echo "<p>TRUE || FALSE is $or2</p>";
    echo "<p>FALSE || FALSE is $or3</p>";
    echo "<p>!TRUE is $not</p>";
    echo "<p>!FALSE is $not1</p>";
?>