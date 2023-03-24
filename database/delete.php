<?php
session_start();
require 'config.php';
if (!isset($_GET['id'])) {
    $_SESSION['mesg'] = "Id Not found";
} else {

    if (delete($conn, $_GET['id'])) {
        $_SESSION['mesg'] = "id: " . $_GET['id'] . " Deleted";
    } else {
        $_SESSION['mesg'] = "Unable to Delete id: " . $_GET['id'];
    }
}


header("Location: http://localhost:8000/database/list.php");