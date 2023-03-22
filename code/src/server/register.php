<?php
    include "../database/config.php";

        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
  

    $sql = "INSERT INTO 'users' ('userName', 'email', 'password', 'firstName', 'lastName') VALUES ('$userName', '$email', '$password', '$firstName', '$lastName')";
    
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "New User created";
    }
    else{
        echo "Error: User could not be created" . $sql . "<br>" .  $conn->error;
    }
    
    $conn.close();

?>