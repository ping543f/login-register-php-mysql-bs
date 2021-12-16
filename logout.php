<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["ID"]) ;
    unset($_SESSION["Email"]);
    unset($_SESSION["First_Name"]);
    unset($_SESSION["Last_Name"]); 
    session_destroy();
    header("Location:index.php");
?>
