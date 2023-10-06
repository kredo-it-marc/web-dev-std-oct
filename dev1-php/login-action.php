<?php
    //FORM HANDLING CODE
    
    /**
     * 1. CHECK if the submit button has been clicked
     * 2. Assign the form data to its respective variables
     * 3. Process the data
     * 4. display an output
     */

    //if-statement
    //isset() is used to check if a variable has a data or VALUE
    if( isset($_GET["btn_login"]) ) //check if the submit button has been clicked
    {
        //if-block => the code here only runs if the condition is TRUE

        //INPUT
        $username = $_GET["username"];
        $password = $_GET["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }

    if( isset($_POST["btn_login"]) )
    {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }

?>