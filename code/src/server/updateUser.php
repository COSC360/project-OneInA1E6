<?php
include "config.php";

if (isset($_POST['update'])) {

    $firstname = $_POST['firstName'];

    $id = $_POST['id'];

    $lastname = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password' WHERE `id`='$user_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "Record updated successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>