<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- action => it is WHERE your form data will be taken to. -->
    <!-- method => it is HOW your form data will be taken to your action -->
    <!-- method GET sends the form data thru the URL -->
    <!-- method POST send the data invisibly to the action -->
    
    <?php
        if(isset($_POST["btn_login"]))
        {
            // INPUT
            $username = $_POST["username"];
            $password = $_POST["password"];

            //OUTPUT
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
        }
    ?>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>
</html>