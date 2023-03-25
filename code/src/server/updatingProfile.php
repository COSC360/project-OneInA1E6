<?php
session_start();

// initializing variables
include "../database/config.php";
$username = "";
$email    = "";
$errors = array(); 
include "../client/errors.php";

//Checking that the user is trying to submit and is logged in.
if (isset($_POST['submit'])) {
    if(isset($_SESSION['loggedIn']) & $_SESSION['loggedIn'] == 'true'){
        $username = $_SESSION['userName'];
        // receive all input values from the form
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password2']);

        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if (empty($firstname)) { array_push($errors, "First is required"); }
        if (empty($lastname)) { array_push($errors, "Last Name is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }
        $sqlemail = "SELECT * FROM users WHERE email='$email';";
        $query = mysqli_query($conn, $sqlemail);
        
        if (mysqli_num_rows($query) > 0) {
            array_push($errors, "That email is already taken");
        } 

        //check if there are errors, if not we update the users information
        if (count($errors) == 0) {

            $sql = "UPDATE users SET email=?, firstName = ?, lastName=?, password= ? WHERE userName=?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $email, $firstname, $lastname, $password_1, $username);
            $stmt->execute();
            if ($stmt->error) {
                echo "FAILURE!!! " . $stmt->error;
              }
            else{
                header('location: ../client/index.php');
        
            }
        }
    }
}


?>
