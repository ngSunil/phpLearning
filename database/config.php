<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="school";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//insert
function insertDataUser($conn,  $email, $password){

    $sql="INSERT INTO user(email, password) 
        VALUES ('$email','$password')";
    if($conn->query($sql)){
        return  $conn->insert_id;
    }

    return 0;
}



//fetch all
function getAll($conn){

    $result= $conn->query("SELECT * FROM student");
    $data=[];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $data[]= $row;
        }
    } 
    return $data;
}
//insert
function insertData($conn, $name, $email, $rollno, $class, $photo){

    $sql="INSERT INTO student(name, email, rollno, class, photo) 
        VALUES ('$name','$email',
        '$rollno','$class','$photo')";
    if($conn->query($sql)){
        return  $conn->insert_id;
    }

    return 0;
}

//update
function updateName($conn, $name,$id){
    $sql="UPDATE `student` SET `name`='$name' WHERE id=$id";
   return $conn->query($sql);
}

//update
function update($conn, $id, $name, $email, $rollno, $class, $photo){

    $sql="UPDATE `student` SET `name`='$name', email='$email', rollno='$rollno', class='$class', photo='$photo' WHERE id=$id";
   return $conn->query($sql);
}

//delete
function delete($conn, $id){
    $sql="DELETE FROM `student` WHERE id=$id";
    return $conn->query($sql);
}

//fetch by id
function read($conn, $id){

    $result= $conn->query("SELECT * FROM student WHERE id=$id");
    $data=[];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data= $row;
        }
    }
    return $data;
}


?>