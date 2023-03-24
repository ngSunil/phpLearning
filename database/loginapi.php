<?php
session_start();
require 'config.php';
$data=[];

if( $_POST['email']=="" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $data['error']=true;
    $data['email'] = "Invalid Email";
}

if( strlen($_POST['password']) < 3 ||   strlen($_POST['password']) >10 ){
    $data['error']=true;
    $data['password'] ="Invalid Password";
}
if(!isset($data['error']) ){
    $user_id= loginUser($conn, $_POST['email'], $_POST['password']);
    if( $user_id!= 0){
        $_SESSION['user_id']= $user_id;
        $data['error']=false;
        $data['mesg'] = "logined";
    }else{
        $data['error']=true;
        $data['mesg'] = "Not logined";
    }
}else{
   
    $data['mesg'] = "Not logined";

}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);