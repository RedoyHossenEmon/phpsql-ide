<?php

$host = 'localhost';
$user = 'root';
$pwd  = '';
$dbname = 'finalPro';
$conn = mysqli_connect($host,$user,$pwd,$dbname);


// $sql = " CREATE TABLE userInfo(`id` INT NOT NULL AUTO_INCREMENT ,`fname` VARCHAR(191) NOT NULL , `lname` VARCHAR(191) NOT NULL , `email` VARCHAR(191) NOT NULL , `pwd` VARCHAR(191) NOT NULL , PRIMARY KEY (`id`))";
// $sql = "INSERT INTO userInfo (fname,lname,email,pwd) VALUES ('NAMM','SLAF','ADF@A','SDS44')";

if($conn != true){
    echo "Connection Failed";
    die(mysqli_error($conn));
}














?>