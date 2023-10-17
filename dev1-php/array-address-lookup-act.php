<?php
    $contacts = ["Caroline"=>"China", "Tom"=>"USA", "Sakura"=>"Japan", "Juan"=>"Philippines", "James"=>"Singapore"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Pages</title>
</head>
<body>
    <form action="" method="post">
        <label for="contact">Choose a contact:</label>
        <select name="contact" id="contact">
            <option selected disabled>Select a contact</option>
            <?php
                foreach($contacts as $name => $address)
                {
                    echo "<option value='$name'>$name</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit" name="btn_submit">
    </form>

    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $contact = $_POST["contact"];

            //PROCESS & OUTPUT
            echo "<p>Name: $contact</p>";
            echo "<p>Address: ".$contacts[$contact]."</p>";
        }
    ?>
</body>
</html>