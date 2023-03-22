<?php
// print_r($_GET);
// echo "<br>";
// print_r($_FILES);
if(isset($_POST["name"])) {
    echo $_POST["name"]."<br>";
}
echo $_POST["email"];

?>