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
$url = "samefilepost.php";
$error = "";
if(isset($_POST["name"])) {
    if($_POST['name'] == 'sunil') {
        $error = "<span style='color: red'>Enter Other name</span>";
        $url = "error.php";
    }
}

?>
<pre>
    <form action="<?php echo $url ?>" method="POST" enctype="multipart/form-data">
        Name: <input type="text" value="" name="name"> <p><?php  echo $error ?></p>
        email: <input type="text" value="" name="email">
        resume: <input type="file" name="ffile" id="">
        <button type="submit">Send</button>

    </form>
    </pre>
</body>
</html>