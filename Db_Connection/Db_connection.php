<?php
$servername = "localhost";
$dbname="Carsell";
$username = "root";
$password = "";
//create connection
$conn = new mysqli($servername, $username, $password,$dbname);
//check connection
if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);

}