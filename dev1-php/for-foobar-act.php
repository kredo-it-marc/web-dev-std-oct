<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foo Bar Activity</title>
</head>
<body>
    <?php
        if(isset($_POST["btn_submit"]))
        {
            //INPUT
            $start = $_POST["start"];
            $end = $_POST["end"];

            //PROCESS & OUTPUT
            if($start < $end) //ascending order 0-9
            {
                for($counter = $start; $counter<=$end; $counter++)
                {
                    if($counter%3 ==0 && $counter%5 == 0) //check if the number is divisible by both 3 and 5
                    {
                        echo "<span style='margin-right: 10px;'>FOOBAR</span>";
                    }
                    elseif($counter%3 == 0) //check if number is divisible by 3
                    {
                        echo "<span style='margin-right: 10px;'>FOO</span>";
                    }
                    elseif($counter%5 == 0) //check if number is divisible by 5
                    {
                        echo "<span style='margin-right: 10px;'>BAR</span>";
                    }
                    else
                    {
                        echo "<span style='margin-right: 10px;'>$counter</span>";
                    }
                }
            }
            else //descending order 9-0
            {
                for($counter=$start; $counter>=$end; $counter--)
                {
                    if($counter%3 ==0 && $counter%5 == 0) //check if the number is divisible by both 3 and 5
                    {
                        echo "<span style='margin-right: 10px;'>FOOBAR</span>";
                    }
                    elseif($counter%3 == 0) //check if number is divisible by 3
                    {
                        echo "<span style='margin-right: 10px;'>FOO</span>";
                    }
                    elseif($counter%5 == 0) //check if number is divisible by 5
                    {
                        echo "<span style='margin-right: 10px;'>BAR</span>";
                    }
                    else
                    {
                        echo "<span style='margin-right: 10px;'>$counter</span>";
                    }   
                }
            }

        }
    ?>
    <form action="" method="post">
        <label for="start">Start</label>
        <input type="number" name="start" id="start" required>
        <br><br>
        <label for="end">End</label>
        <input type="number" name="end" id="end" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>