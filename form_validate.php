<?php
session_start();
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
<?php 
            $name_error = null;

            if(isset($_SESSION['error'])){
                if(isset($_SESSION['error']['name'])){
                  $name_error =   $_SESSION['error']['name'];
                }
                unset($_SESSION['error']);
            }
            
        ?>
    <form method="post" action="formsubmit.php">
        <pre>
        Name: <input type="text" name="name" id="">
        
        Email: <input type="email" name="email" id="">
        <span style="color: red;">

        <?php if($name_error != null) {
            echo $name_error;
            }?>
        </span>
            <hr>
        <input type="submit" value="Submit">
    </form>
    </pre>
</body>
</html>