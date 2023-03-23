<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// INSERT QUERY
$sql = "INSERT INTO student(name, email, rollno, class, photo) 
          VALUES ('John Doew','john@doe.com','4','7','uploads/johndoe.jpeg')";
if($conn->query($sql)) {
  echo $conn-> insert_id;
}


// SELECT QUERY
$result = $conn->query("SELECT * FROM student");
echo $conn->affected_rows;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Roll No.: " . $row["rollno"]. "<br>";
    echo "<pre>";
    print_r($row);
    echo "</pre>";

  }
} else {
  echo "0 results";
}
$conn->close();
?> 