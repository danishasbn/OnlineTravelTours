<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "paradisechaser";

    // Create connection
    $dbc = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($dbc->connect_error) {
        die("Connection failed: " . $dbc->connect_error);
    }
    else{
        // echo "Connection Established";
    }
?>