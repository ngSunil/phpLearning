
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin:10px">
<?php 
    $Uploaded = false;
if(isset($_FILES["photo"])){
    $filename = uniqid().$_FILES['photo']['name'];
    $target = "uploads/".$filename;
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
        echo '<div class="alert alert-success" role="alert">
        File uploaded succesfully &#129305;
      </div>';
        echo "<img src='$target' height='350px'>";
        $Uploaded = true;
    }else {
        echo "Unable to upload data";
        $display_alert = false;
    }
    
}
if(!$Uploaded) {
        

?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="" class="form-control mb-3">
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
<?php } ?>
</body>
</html>