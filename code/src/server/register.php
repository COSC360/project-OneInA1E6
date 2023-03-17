<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $email = $_POST['email'];
    }

    $SQL = "INSERT INTO 'users' ('userName', 'email', 'password') VALUES ('$userName', '$email', '$password')";
    
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "New User created";
    }
    else{
        echo "Error: User could not be created" . $sql . "<br>" $conn->error;
    }

    $conn.close();

?>