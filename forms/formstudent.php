<?php
session_start();
$name_error= "";
$email_error= "";
$rollno_error= "";
$class_error= "";
$photo_error= "";




$name_value= "";
$email_value= "";
$rollno_value= "";
$class_value= "";
$photo_value= "";


if(isset($_SESSION['form'])){
   $name_value= $_SESSION['form']['name'];
   $email_value= $_SESSION['form']['email'];
   $rollno_value= $_SESSION['form']['rollno'];
   $class_value= $_SESSION['form']['class'];
   unset($_SESSION['form']);
}




if (isset($_SESSION['error'])) {


  if(isset($_SESSION['error']['name'])){
   $name_error=$_SESSION['error']['name'];
  }


  if(isset($_SESSION['error']['email'])){
   $email_error=$_SESSION['error']['email'];
  }


  if(isset($_SESSION['error']['rollno'])){
   $rollno_error=$_SESSION['error']['rollno'];
  }


  if(isset($_SESSION['error']['class'])){
   $class_error=$_SESSION['error']['class'];
  }


  if(isset($_SESSION['error']['photo'])){
   $photo_error=$_SESSION['error']['photo'];
  }


  unset($_SESSION['error']);


 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>


   <style>
       p{
           color: red;
       }
   </style>
</head>
<body>
   <form action="submitform.php" enctype="multipart/form-data" method="post">


       Name: <input type="text" value="<?php echo $name_value; ?>"   name="name" > <p> <?php echo $name_error; ?> </p> <br>
       Email: <input type="text"  value="<?php echo $email_value; ?>"  name="email" > <p><?php echo $email_error; ?></p> <br>
       Roll No. <input type="text"  value="<?php echo $rollno_value; ?>" name="rollno" > <p><?php echo $rollno_error; ?></p> <br>
       Class: <input type="text" value="<?php echo $class_value; ?>"  name="class" > <p><?php echo $class_error; ?></p> <br>
       photo: <input type="file" name="photo" > <p><?php echo $photo_error; ?></p> <br>
       <input type="submit" value="submit">
   </form>
</body>
</html>