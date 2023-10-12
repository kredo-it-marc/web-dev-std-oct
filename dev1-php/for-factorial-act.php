<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Activity</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $input = $_POST["input"];

            //PROCESS
            $factorial = calculateFactorial($input);

            //OUTPUT
            echo "<p>The factorial of $input is $factorial</p>";
        }
    ?>
    <form action="" method="post">
        <label for="input">Enter number</label>
        <input type="number" name="input" id="input" required min="0">
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>
<?php
    function calculateFactorial($number)
    {
        $factorial = 1;

        if($number == 0)
        {
            return $factorial;
        }
        else
        {
            for($counter = $number; $counter>=1; $counter--)
            {
                $factorial *= $counter; //$factorial = $factorial * $counter;
            }

            return $factorial;
        }
    }

?>