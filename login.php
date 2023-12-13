<?php


    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password'];

    $conn = new mysqli('localhost','root','','petsplay_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from users where u_email = ?");
        $stmt->bind_param("s", $u_email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['u_password'] === $u_password){
                header("location: home.html");
            } else{
                echo "<h2>invalid Email or password</h2>";        
            }
        }else{
            echo "<h2>invalid Email or password</h2>";
        }
    }

?>