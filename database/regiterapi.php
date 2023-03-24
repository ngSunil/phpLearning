<?php
require 'config.php';
$data=[];

if( $_POST['email']=="" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $data['error']=true;
    $data['email'] = "Invalid Email";
}

if( strlen($_POST['password']) < 3 ||   strlen($_POST['password']) >10 ){
    $data['error']=true;
    $data['password'] ="Enter a valid Password between 3 to 10 letters";
}
if(!isset($data['error']) ){
    if(insertDataUser($conn, $_POST['email'], $_POST['password']) != 0){
        $data['error']=false;
        $data['mesg'] = "user registed";
    }else{
        $data['error']=true;
        $data['mesg'] = "Not registed";
    }
}else{
   
    $data['mesg'] = "Not registed";

}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);