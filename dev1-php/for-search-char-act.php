<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Search Char</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $word = $_POST["word"];

                //PROCESS
                $word_lower = strtolower($word);
                $word_length = strlen($word);
                $count = 0; 

                for($index = 0; $index<$word_length; $index++)
                {
                    $char = substr($word_lower,$index,1); //get 1 character from the input

                    if($char == 'a' || $char == 'e' || $char == 'i' || $char=='o' || $char == 'u')
                    {
                        $count++;
                    }
                }

                //OUPUT
                echo "<div class='alert alert-primary w-50 mx-auto mb-3 text-center'>$word has $count vowel/s</div>";
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="word" class="form-label">Enter a word</label>
                    <input type="text" name="word" id="word" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>