<?php
session_start();

// initializing variables
include "../database/config.php";
$username = "";
$email    = "";
$errors = array(); 
include "../client/errors.php";
// REGISTER USER
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

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (userName, email, password, firstName, lastName) 
  			  VALUES('$username', '$email', '$password', '$firstname', '$lastname')";
  	mysqli_query($conn, $query);
  	$_SESSION['userName'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../client/index.php');
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
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>


<?php
    // session_start();
    // include "../database/config.php";
    // require 'valid.php';

    
    //     $userName = $_POST['userName'];
    //     $password = $_POST['password'];
    //     $email = $_POST['email'];
    //     $firstName = $_POST['firstName'];
    //     $lastName = $_POST['lastName'];


    // $sql = "INSERT INTO users (userName, email, password, firstName, lastName) VALUES ('$userName', '$email', '$password', '$firstName', '$lastName')";
    
    // $result = $conn->query($sql);

    // if($result == TRUE){
    //     echo "New User Succesfully created";
    // }
    // else{
    //     echo "Error: User could not be created" . $sql . "<br>" .  $conn->error;
    // }

    
    // mysqli_close($conn);
?> 
