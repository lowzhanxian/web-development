<?php

//the headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../register/registerproduct.php';

$database=new Database();
$db=$database->toConnect();

$register =new registerproduct($db);
session_start();

// the product queryy
$result=$register->read();
//get the row product from register_login table
$num=$result->rowCount();

//check the data
if($num > 0){
    $register_arr=array();
    $register_arr['data']=array();
    
    while ($row=$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        
        $register_item=array(
            "userId"=>$userId,
            "userName"=>$userName,
            "userEmail"=>$userEmail,
            "userPassword"=>$userPassword,
            "userContact"=>$userContact,
            "memberType"=>$memberType,
            
        );
        array_push($register_arr['data'],$register_item);
        
    }
    //json and output
    echo json_encode($register_arr);
}
else{
    echo json_encode(array('message'=>'Not Result Found'));
}
?>