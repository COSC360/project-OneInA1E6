<?php
session_start();
$_SESSION['user'] = $_POST['username'];

echo "You are logged in as: " . $_SESSION['user'];
?>