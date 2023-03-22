<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create conneciton
    $conn  = mysqli_connect($servername, $username, $password);
    // Check connection
    if(!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "Successfully connected";
    mysqli_close($conn);
?>