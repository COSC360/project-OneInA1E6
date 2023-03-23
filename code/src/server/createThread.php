<?php
session_start();

// initializing variables
include "../database/config.php";
$username = "";
$description = "";
$errors = array(); 
include "../client/errors.php";

// CHECK USER is logged in
if (isset($_POST['submit'])){
  if(isset($_SESSION['loggedIn']) & $_SESSION['loggedIn'] == 'true'){
    $userName = $_SESSION['userName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $familyFriendly = mysqli_real_escape_string($conn, $_POST['familyFriendly']);
    $friendsOnly = mysqli_real_escape_string($conn, $_POST['friendsOnly']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

  if (empty($title)) {
  	array_push($errors, "Thread Title is required");
  }
  if (empty($category)) {
  	array_push($errors, "Category is required");
  }
  if (empty($description)) {
    array_push($errors, "Description is required");
  }

  if (count($errors) == 0) {
  	
    $query = "INSERT INTO threads (userName, title, category, familyFriendly, friendsOnly, description) VALUES('$userName', '$title', '$category', '$familyFriendly', '$friendsOnly', '$description')";

    mysqli_query($conn, $query);

  	  header('location: ../client/index.php');
  	}else {
  		array_push($errors, "There was an error creating the thread");
  	}
  }
  }



?>
