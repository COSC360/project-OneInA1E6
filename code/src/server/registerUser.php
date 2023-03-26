<?php
session_start();

// initializing variables
include "../database/config.php";
$username = "";
$email    = "";
$image = "";
$errors = array(); 
include "../client/errors.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['userName']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($firstname)) { array_push($errors, "First is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE userName='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userName'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

   ///////////////////////Images
          $target_dir = "../client/images/";
          $target_file = $target_dir . basename($_FILES["image"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
          // Check if image file is a actual image or fake image
          if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo "File is not an image.";
              $uploadOk = 0;
            }
          }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          
          // Check file size
          if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          
          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
          
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

      ////////////////////////////

  	$query = "INSERT INTO users (userName, email, password, firstName, lastName, image) VALUES('$username', '$email', '$password_1', '$firstname', '$lastname', '$target_file')";
  	mysqli_query($conn, $query);
  	$_SESSION['userName'] = $username;
  	$_SESSION['loggedIn'] = "true";
    
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jemseh.noreply@gmail.com'; 
    $mail->Password = 'ysdvkfifmltvmkuv'; 
    $mail->SMTPSSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('jemseh.noreply@gmail.com');

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = "Welcome to Jems-Eh";
    $mail->Body = "Thank you for signing up with Jems-Eh! Your account has successfully been created!";
    // $mail->send();



  	header('location: ../client/index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['userName']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE userName='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userName'] = $username;
  	  $_SESSION['loggedIn'] = "true";
  	  header('location: ../client/index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
