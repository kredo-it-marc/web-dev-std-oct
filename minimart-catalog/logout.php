<?php
    session_start(); //connect to session
    session_unset(); //remove values from session
    session_destroy(); //delete the session itself
    header("Location:login.php"); //redirect to login page
?>