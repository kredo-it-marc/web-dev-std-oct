<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Area of a Rectangle</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $length = $_POST["length"];
                $width = $_POST["width"];

                //PROCESS
                $area = calculateArea($length, $width);

                //OUTPUT
                displayOutput($length, $width, $area);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="length" class="form-label">Length</label>
                    <input type="number" name="length" id="length" class="form-control mb-3" required>
                    <label for="width" class="form-label">Width</label>
                    <input type="number" name="width" id="width" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function calculateArea($length, $width)
    {
        return $length*$width;
    }

    function displayOutput($length, $width, $area)
    {
        echo "<div class='alert alert-success w-50 mx-auto text-center mb-3'>The area of a rectangle, given the length of $length and the width of $width, is $area sq. units.</div>";
    }
?>