<?php
include "config.php";

if (isset($_POST['update'])) {

    $firstname = $_POST['firstName'];

    $id = $_POST['id'];

    $lastname = $_POST['lastName'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "UPDATE users SET firstname='$firstname',lastName='$lastname',emaiL='$email',password='$password' WHERE id='$id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "Record updated successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>