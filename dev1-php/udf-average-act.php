<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Average Activity</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $num1 = $_POST["num_1"];
                $num2 = $_POST["num_2"];

                //PROCESS
                $average = average($num1, $num2);

                //OUTPUT
                displayOutput($num1, $num2, $average);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="num-1" class="form-label">Number 1</label>
                    <input type="number" name="num_1" id="num-1" class="form-control mb-3" required>
                    <label for="num-2" class="form-label">Number 2</label>
                    <input type="number" name="num_2" id="num-2" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function average($x, $y)
    {
        return ($x + $y)/2;
    }

    function displayOutput($num1, $num2, $average)
    {
        echo "<div class='alert alert-primary w-50 mx-auto mb-3 text-center'>The average of $num1 and $num2 is $average</div>";
    }
?>
