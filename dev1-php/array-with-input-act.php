<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>With Input</title>
</head>
<body>
    <!-- 1st FORM -->
    <form action="" method="post">
        <label for="no-of-countries">How many countries have you been to?</label>
        <input type="number" name="no_of_countries" id="no-of-countries" required>
        <input type="submit" value="Set" name="btn_set">
    </form>

    <!-- 2nd FORM -->
    <form action="" method="post">
        <?php
            if( isset($_POST["btn_set"]))
            {
                //INPUT
                $no_of_countries = $_POST["no_of_countries"];

                echo "<hr>";
                //PROCESS - display the input fields
                for($i=1; $i<= $no_of_countries; $i++)
                {
                    echo "<label for='country-$i'>Country #$i</label>";
                    echo "<input type='text' name='countries[]' id='country-$i' required>";
                    echo "<br><br>";
                }

                echo "<input type='submit' name='btn_save' value='Save'>";
            }
        ?>
    </form>

    <?php
        if(isset($_POST["btn_save"]))
        {
            //INPUT
            $countries = $_POST["countries"];

            //PROCESS & OUTPUT
            foreach($countries as $country)
            {
                echo "<h1>$country</h1>";
            }
        }
    ?>
</body>
</html>