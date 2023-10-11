<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Vowel or Consonant</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $letter = $_POST["letter"];

                //PROCESS
                $letter_lowercase = strtolower($letter); //strtolower() converts string to lowercase
                $letter_length = strlen($letter); // strlen() counts how many characters there are in the string
                $type = ctype_alpha($letter); //ctype_alpha() returns TRUE if the string is made of letters, otherwise FALSE.

                if($letter_lowercase == 'a' || $letter_lowercase=='e' || $letter_lowercase=='i' || $letter_lowercase == 'o' || $letter_lowercase == 'u')
                {
                    echo "<p class='text-center text-muted'>$letter is a Vowel</p>";
                }
                elseif($letter_length>1 || $type==0 ) 
                {
                    echo "<p class='text-center text-muted'>$letter is a INVALID</p>";
                }
                else
                {
                    echo "<p class='text-center text-muted'>$letter is a Consonant</p>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="letter" class="form-label">Letter</label>
                    <input type="text" name="letter" id="letter" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>