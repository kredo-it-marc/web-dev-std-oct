<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Grading Activity</title>
</head>
<body>
    <div class="container py-5">
        <?php
            /**
             * 90-100		--- Excellent
             * 85-89		--- Good
             * 80-84		--- Fair
             * 75-79		--- Poor
             * 60-74 		--- Fail
             */

            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $grade = $_POST["grade"];

                //PROCESS & OUTPUT
                // 90 <= grade <= 100
                if(90<= $grade && $grade<=100)
                {
                    echo "<p class='text-center text-muted'>$grade is Excellent</p>";
                }
                elseif(85<=$grade && $grade<=89)
                {
                    echo "<p class='text-center text-muted'>$grade is Good</p>";
                }
                elseif(80<=$grade && $grade<=84)
                {
                    echo "<p class='text-center text-muted'>$grade is Fair</p>";
                }
                elseif(75<=$grade && $grade<=79)
                {
                    echo "<p class='text-center text-muted'>$grade is Poor</p>";
                }
                elseif(60<=$grade && $grade<=74)
                {
                    echo "<p class='text-center text-muted'>$grade is Fail</p>";
                }
                else
                {
                    echo "<p class='text-center text-muted'>$grade is INVALID</p>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="number" name="grade" id="grade" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>