<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

$conn = new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
//echo "connection successful"; 
?>
