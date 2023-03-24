<!DOCTYPE html>
<html>
<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    session_destroy();
}
    header('Location: index.php');
?>
</html>