<?php
define('servername','localhost');
define('username','root');
define('password','root');
define('dbname','testPHP');
$conn=new mysqli(servername,username,password,dbname);
if($conn->connect_error){
    die("Could not connect :".$conn->connect_error)."<br>";
}
echo "Connected Succesfully"."<br>";
$sql="create table employee(int id not null auto_increment primary_key,name varchar(10),location varchar(20));";
if($conn->query($sql)===TRUE){
    echo "Tables Created";
}
?>