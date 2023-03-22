<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin: 10px">
<div class="col-md-6">
    

    <form action="submitform.php" enctype="multipart/form-data" method="post">


    <div class="form-control">
<label for="name">Name</label>
 <input class="form-control" type="text" name="name"><br>
 Email: <input type="text" class="form-control" name="email"><br>
 Roll No. <input type="text" class="form-control" name="rollnumber"><br>
 Class <input type="text" class="form-control" name="class"><br>
 Photo. <input type="file" class="form-control" name="photo"><br>
 <button class="btn btn-primary" type="submit">Submit Form</button>
</div>
    </form>
    </div>
</body>
</html>