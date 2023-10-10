<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Odd Even Activity</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $num = $_POST["input"];

                //PROCESS & OUTPUT
                if( $num%2 == 0 ) //check if input is even
                {
                    echo "<p class='text-center text-muted'><span class='fw-bold fst-italic text-primary'>$num</span> is EVEN</p>";
                }
                else
                {
                    echo "<p class='text-center text-muted'><span class='fw-bold fst-italic text-danger'>$num</span> is ODD</p>";

                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="input" class="form-label">Input</label>
                    <input type="number" name="input" id="input" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
