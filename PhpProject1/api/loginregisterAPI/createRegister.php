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


   if($register->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Successfully Register !"));
  
   
    }
    else{
        // tell the user
        http_response_code(400);
            echo json_encode(array("message" => "SORRY PLEASE TRY AGAIN"));
    
    }

?>