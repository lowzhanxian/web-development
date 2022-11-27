<?php

//the headers
header('Acces-Control-Allow-Origin: *');
header('Content-Type:application/json; charset=UTF-8');


include_once '../config/Database.php';
include_once '../register/registerproduct.php';

$database=new Database();
$db=$database->toConnect();

$register =new registerproduct($db);

$register->userId= isset($_GET['userId'])? $_GET['userId']:die();

//get the read one in register
$register->read_one();

$register_arr=array(
     "userId"=>$register->userId,
            "userName"=>$register->userName,
            "userEmail"=>$register->userEmail,
            "userPassword"=>$register->userPassword,
            "userContact"=>$register->userContact,
            "memberType"=>$register->memberType,
);

print_r(json_encode($register_arr));