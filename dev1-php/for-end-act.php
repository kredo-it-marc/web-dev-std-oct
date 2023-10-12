<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starts With, Ends With</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $end = $_POST["end"];

            //PROCESS & OUTPUT
            for($counter=1; $counter<= $end; $counter++)
            {
                echo "<span style='margin-right:10px;'>$counter</span>";
            }
        }
    ?>
    <form action="" method="post">
        <label for="end">Enter ending number</label>
        <input type="number" name="end" id="end" required min="1">
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>