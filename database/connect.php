<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create conneciton
    $conn  = new mysqli($servername, $username, $password);
    // Check connection
    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    echo "Successfully connected";
    $conn->close();
?>