<?php
// start the session
session_start();

// Check if the user is not logged in, then redirect the user to login page
if ($count==1) {
    $_SESSION['logged'] = true;
    $_SESSION['usernamae'] = $u_name;
    header("location: home.html");
} else {
    $_SESSION['logged'] = false;
    header("location: login.html");
    exit();
}
?>