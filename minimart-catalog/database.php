<?php

    function dbConnect()
    {
        $server_name = 'localhost';
        $username = 'marc'; //MAMP and XAMPP use 'root' for the username
        $password = 'password'; //MAMP uses 'root' for password. XAMPP has no password. So we place '' instead.
        $database = 'minimart_catalog'; //name of the database
    
        $conn = new mysqli($server_name, $username, $password, $database);
    
        if($conn->connect_error) //check if there is an error in the connection
        {
            //display an error message.
            die("Failed to connect to the database: ".$conn->connect_error);
        }
        else
        {
            // echo "connection successful";
            return $conn;
        }
    }
?>