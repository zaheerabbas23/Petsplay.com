<?php

// require_once "session.php";

$u_name = $_POST['u_name'];
$u_email = $_POST['u_email'];
$u_mobile = $_POST['u_mobile'];
$u_password = $_POST['u_password'];

$conn = new mysqli('localhost','root','','petsplay_db');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(u_name, u_email, u_mobile, u_password) 
        values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$u_name, $u_email, $u_mobile, $u_password);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
    header("location: login.html");
}
?>