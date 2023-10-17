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
<hr>
<h1>Associative Array</h1>
<?php
    //method 1 - []
    $person = ["name"=>"Nikko", "age"=>"26", "address"=>"Lapu-lapu City"];

    //method 2 - array()
    $book = array("title"=> "Adventures of Tom Sawyer", "author"=>"Mark Twain", "price"=>10);

    //assigning individual values
    $age["Caroline"] = 16;
    $age["Andre"] = 20;
    $age["Alex"] = 30;

    //echo individual values from the array
    echo $person["name"],"<br>"; //Nikko
    echo $book["title"],"<br>"; //Adventures of Tom Sawyer
    echo $age["Alex"],"<br>"; //30

    //print_r()
    print_r($person);
    echo "<br>";
    print_r($book);
    echo "<br>";
    print_r($age);
    echo "<br>";

    //foreach()
    foreach($person as $key=>$value)
    {
        echo "<p>$key: $value</p>";
    }

?>

<hr>
<h1>2D Associative Array</h1>
<?php
    $market = array(
            "round" => ["fruit1"=>"Orange","fruit2"=>"Grapes"],
            "yellow" => ["fruit3"=> "Banana","fruit4"=>"Mango"]
    );

    echo $market["round"]["fruit1"],"<br>"; //Orange
    echo $market["round"]["fruit2"],"<br>"; //Grapes
    echo $market["yellow"]["fruit3"],"<br>"; //Banana
    echo $market["yellow"]["fruit4"],"<br>"; //Mango

    foreach($market as $sub_array => $arr)
    {
        echo "<h1>$sub_array</h1>";
        foreach($arr as $key => $fruit)
        {
            echo "<p>$fruit</p>";
        }
    }

?>