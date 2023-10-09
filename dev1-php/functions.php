<?php
    // INTERNAL / BUILT-IN FUNCTIONS
    $str1 = "I AM IN UPPERCASE";
    $str2 = "i am in lowercase";

    echo strtolower($str1),"<br>";
    echo strtoupper($str2),"<br>";
    var_dump($str1);
?>
<hr>
<?php
    //USER-DEFINED FUNCTIONS
    //function definition / declaration - declares/defines the function. It doesn't run unless you call the function
    function displayHelloWorld() //no return, no arguments
    {
        echo "<h1>Hello World</h1>";
    }

    function greetUser($name) //no return, 1 argument
    {
        echo "<p>Hello, $name!</p>";
    }

    function add($x, $y) //no return, 2 argument
    {
        $sum = $x + $y;
        echo "<p>The sum of $x and $y is $sum.</p>";
    }

    function subtract($x, $y) // 2 arguments, return
    {
        $difference = $x - $y;
        return $difference;
    }

    //function call - runs the code from the function
    displayHelloWorld();
    greetUser("Yoko");
    greetUser("Sakura");
    add(10, 15);
    add(-5, 37);
    add(0.009, 3.02);
    $result = subtract(32, 44);
    echo "<p>Result: $result</p>";
?>