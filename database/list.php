<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: http://localhost:8000/database/login.php");
    
}
require 'config.php';
$data = getAll($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
       
        //echo json_decode($ab)->name;
        if (isset($_SESSION['mesg'])) {
            echo $_SESSION['mesg'];
            unset($_SESSION['mesg']);
        }
        ?>
    </p>
        <a href="http://localhost:8000/forms/formstudent.php">Create</a>
        <?php
            if(isset($_SESSION['user_id'])){
                $user= getUserById($conn, $_SESSION['user_id']);
                echo '<h3> '.$user['email'].' </h3>';
                echo ' <a href="http://localhost:8000/database/logout.php">Logout</a>';
            }else{
                echo ' <a href="http://localhost:8000/database/login.php">Login</a>';
            }
        ?>
       
    <table>

        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roll No</th>
            <th>Class</th>
            <th>Photo</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php

            foreach ($data as $item) {
                echo "  <tr> 
                            <td> " . $item['id'] . " </td>
                            <td> " . $item['name'] . " </td>
                            <td> " . $item['email'] . " </td>
                            <td> " . $item['rollno'] . " </td>
                            <td> " . $item['class'] . " </td>
                            <td> <img style='height:100px; width:100px;' src='" . $item['photo'] . "'> </td>
                            <td> <a href='edit.php?id=" . $item['id'] . "'> Edit </a>  </td>
                            <td> <a href='delete.php?id=" . $item['id'] . "'> Delete </a>  </td>
                        </tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>