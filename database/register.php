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
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <h1>
        Register
    </h1>
    <form id="form" method="post">
        <input id="email" type="text" name="email" >
        <p id="email_error"></p>
        <input id="password" type="password" name="password" >
        <p id="password_error"></p>
        <input type="submit" value="Submit">
    </form>

    <script>
       $(document).ready(function(){
        $("#form").on('submit',(function(e) {
            e.preventDefault();

            $("#email_error").html("");
             $("#password_error").html("");
             $form= new FormData(this);
            
            $.ajax({
                url: "regiterapi.php",
                type: "POST",
                data:  $form,
                contentType: false,
                cache: false,
                processData:false,
                accepts: "application/json",
                success: function(data){
                    console.log(data);
                    if(data.error){
                        if(data.email !== undefined){
                            $("#email_error").html(data.email);
                        }

                        if(data.password !== undefined){
                            $("#password_error").html(data.password);
                        }

                        alert(data.mesg);
                       // window.location="http://localhost:8000/mail/list.php";
                    }else{
                        window.location="http://localhost:8000/database/list.php";
                    }
                }
            });
        }));
       });
    </script>
</body>
</html>