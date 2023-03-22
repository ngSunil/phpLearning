<?php
session_start();
if($_POST['name'] == ""){
    $_SESSION['error']['name'] = "Enter a valid name";
}else if($_POST['name'] == 'sunil'){
    $_SESSION['error']['name'] = "You name should not be Sunil";
}
header("Location: ".$_SERVER['HTTP_REFERER']);

?>