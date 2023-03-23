<?php
session_start();

// initializing variables
include "../database/config.php";
$username = "";
$errors = array(); 
include "../client/errors.php";

// CHECK USER
if (isset($_SESSION['userName'])){
    $userName = $_SESSION['userName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $familyFriendly = mysqli_real_escape_string($conn, $_POST['familyFriendly']);
    $friendsOnly = mysqli_real_escape_string($conn, $_POST['friendsOnly']);

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
  	
    $query = "INSERT INTO threads (userName, title, category, familyFriendly, friendsOnly, description) 
  			  VALUES('$userName', $title, '$category', '$familyFriendly', '$friendsOnly', '$description')";
  	mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: ../client/index.php');
  	}else {
  		array_push($errors, "There was an error creating the thread");
  	}
  }
}
// header('location: ../server/login.php');

?>
