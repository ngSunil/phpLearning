<?php
session_start();
if( strlen($_POST['name']) < 3 ||   strlen($_POST['name']) >10 ){
   $_SESSION['error']['name']="Enter a valid Name between 3 to 10 letters";
}


if( $_POST['email']=="" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
   $_SESSION['error']['email']="Enter a valid Email";
}


if(strlen($_POST['rollno'])!=7){
   $_SESSION['error']['rollno']="Roll no. should be of length 7";
}


if(!filter_var($_POST['class'], FILTER_VALIDATE_INT) || $_POST['class']<1 || $_POST['class']>10){
   $_SESSION['error']['class']= "Enter class between 1 to 10";
}


if (isset($_FILES['photo']) && isset($_FILES['photo']['name']) && $_FILES['photo']['name']!= "") {
 if($_FILES['photo']['size']< 500000){


       $dir="uploads/";


       $filename=uniqid(). $_FILES['photo']['name'];
       $target= $dir.$filename;
       if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)) {
          
       }
 }else{
   $_SESSION['error']['photo']= "File size should be less than 500kb";
 }
}else{
   $_SESSION['error']['photo']="Photo is required";
}


if (isset($_SESSION['error'])) {
   $_SESSION['form']= $_POST;
   header("Location: ".$_SERVER['HTTP_REFERER']);


}else{

   require '../mail/mailfn.php';
   require '../database/config.php';
   insertData($conn, $_POST['name'], $_POST['email'], $_POST['rollno'], $_POST['class'], $target);
   if(send_mail($_POST['name'], $_POST['email'], $_POST['rollno'], $_POST['class'], $target)){
      header("Location: http://localhost:8000/forms/success.php");

     
   }
}
