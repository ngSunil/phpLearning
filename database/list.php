<?php
session_start();
require 'config.php';
$data = getAll($conn);
$list = ["name" => ['a', 'b', 'c'], ['d', 'e']];
echo json_encode($list);
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
        echo "<pre>";
        $ab = json_encode($data);
        echo $ab;
        echo json_decode($ab)[0] -> id;
        echo "</pre>";
        if (isset($_SESSION['mesg'])) {
            echo $_SESSION['mesg'];
            unset($_SESSION['mesg']);
        }
        ?>
    </p>

    <table>

        <head>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roll No</th>
            <th>Class</th>
            <th>Photo</th>
            <th>Action</th>
        </head>

        <body>
        <a href="../forms/formstudent.php"> Create </a>
            <?php

            foreach ($data as $item) {
                echo "<tr> 
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
        </body>
    </table>
</body>

</html>