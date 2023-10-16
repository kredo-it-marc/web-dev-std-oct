<h1>Indexed Array</h1>
<?php
    //method 1 - []
    $fruits = ["apple","banana","orange"];

    //method 2 - array() language construct
    $vegetables = array("Carrot","Cabbage","Potato");

    //Assigning individual values 
    $colors[0] = "Blue";
    $colors[1] = "Black";
    $colors[2] = "Red";

    //display contents of the array
    print_r($fruits); //displays the array as a human readable structure
    echo "<br>";
    print_r($vegetables); //displays the array as a human readable structure
    echo "<br>";
    print_r($colors); //displays the array as a human readable structure
    echo "<br>";

    //display individual values from the array
    echo $fruits[0],"<br>"; //apple
    echo $vegetables[1],"<br>"; //Cabbage
    echo $colors[2],"<br>"; //Red

    //count how many elements in the array
    echo count($fruits); //displays 3 because there are 3 values in the array

    //display using foreach loop
    foreach($fruits as $var)
    {
        //loop body or foreach-block
        echo "<p>$var</p>";
    }

?>