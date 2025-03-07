<?php
$server="localhost";
$user="root";
$pass="";
$dbase="blogapp";
$conn=new mysqli($server, $user, $pass, $dbase);
if($conn->connect_error){
die("Connection failed");
}
