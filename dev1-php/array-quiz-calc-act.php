<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Quiz Calculator</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <!-- 1st Form -->
                <form action="" method="post">
                    <label for="no-of-quizzes" class="form-label">How many quizzes do you have?</label>
                    <input type="number" name="no_of_quizzes" id="no-of-quizzes" required class="form-control mb-3">
                    <input type="submit" value="Generate" class="btn btn-success btn-sm w-100" name="btn_generate">
                </form>
                <!-- 2nd Form -->
                <form action="" method="post">
                    <?php
                        if( isset($_POST["btn_generate"]) ) 
                        {
                            //INPUT
                            $no_of_quizzes = $_POST["no_of_quizzes"];

                            echo "<hr>";
                            //PROCESS & OUTPUT
                            for($i=1; $i<=$no_of_quizzes; $i++)
                            {
                                echo "<label class='form-label' for='quiz-$i'>Quiz #$i</label>";
                                echo "<input type='number' name='scores[]' id='quiz-$i' class='form-control mb-3' required>";
                            }

                            echo "<input type='submit' class='btn btn-primary w-100' value='Calculate' name='btn_calculate'>";
                        }
                    ?>
                </form>
            </div>
        </div>

        <?php
            if( isset($_POST["btn_calculate"]) )
            {
                //INPUT
                $scores = $_POST["scores"];
                $scores_count = count($scores);

                //PROCESS
                $total = 0;

                foreach($scores as $x)
                {
                    $total += $x; // $total = $total + $x;
                }

                $average = $total / $scores_count;

                //OUTPUT
                echo "<div class='alert alert-success my-5 w-50 mx-auto text-center'>The average of the scores is $average</div>";
            }
        ?>
    </div>
</body>
</html>