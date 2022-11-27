<?php

//the headers
header('Acces-Control-Allow-Origin: *');
header('Content-Type:application/json; charset=UTF-8');
header('Access-Control-Allow-Methods:POST');
header("Access-Control-Max-Age: 3600");
header('Access-Control-Allow-Methods:Access-Control-Allow-Headers,Content-Type,Authorization,X-Requested-With');

include_once '../config/Database.php';
include_once '../register/registerproduct.php';

$database=new Database();
$db=$database->toConnect();

$register =new registerproduct($db);
session_start();

// make sure data is not empty
if(
    !empty($_POST['userName']) &&
    !empty($_POST['userEmail']) &&
    !empty($_POST['userPassword']) &&
    !empty($_POST['timeStart']) &&
    !empty($_POST['userContact']) 
      
)

$register->userName=$register->userName;
$register->userEmail=$register->userEmail;
$register->userPassword=$register->userPassword;
$register->userContact=$register->userContact;
$register->memberType=$register->memberType;

if(true){
    if($register->create()){
        //echo "<script> alert('Thanks for joining us!');window.location= \"login.php\"; </script>";
        // tell the user //postman
        http_response_code(200);
        echo json_encode(array("message" => "Welcome To Join CLT SPORT CENTER"));
  
   
    }
else{
    // tell the user
    http_response_code(400);
        echo json_encode(array("message" => "SORRY PLEASE TRY AGAIN"));
    
}
}
?>