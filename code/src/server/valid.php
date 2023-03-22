<?php
 require 'config.php';

// Only using POST for client data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //For new user
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['password'])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $userName = mysqli_real_escape_string($conn, $_POST['userName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hash = md5($password);
    }
    //For login
    else if (isset($_POST['userName']) && isset($_POST['password'])) {
        $userName = mysqli_real_escape_string($conn, $_POST['userName']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hash = md5($password);
    }
}
else {
    throw new Exception('The information entered is not valid');
} 
?>