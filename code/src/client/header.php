<?php
session_start();

if(isset($_SESSION['userName'])){
   $userName = $_SESSION['userName'];
echo '
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <title>JEMS-EH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <div class= "container sticky-top rounded-3">
    <div class="container sticky-top bg-white rounded-3">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark">
                <!-- logo -->
                <span class="fs-4 p-1 rounded-2 bg-warning">JEMS-EH</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a href="#" class="nav-link active bg-warning text-black">Hot</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link active bg-warning text-black">New</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link active bg-warning text-black">liked</a>
                </li>
                <li class="nav-item">
                <a href="../client/create.php" class="nav-link active bg-warning text-black">Create New Thread</a>
                </li>
            </ul>';
            


                echo'<div class="col-md-3 text-end">
                Welcome back ' . $userName . ' </div>' ;            
            echo'
            </header>
        </div>
    </div>
    </body>
    </html>';
}
else{
    echo '
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <title>JEMS-EH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <div class= "container sticky-top rounded-3">
    <div class="container sticky-top bg-white rounded-3">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <a href="../client/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark">
                <span class="fs-4 p-1 rounded-2 bg-warning">JEMS-EH</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a href="#" class="nav-link active bg-warning text-black">Hot</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link text-black">New</a>
                </li>
            </ul>
            <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-warning text-black me-2" onclick="loginButton()">Login</button>
                    <button type="button" class="btn btn-outline-warning text-black me-2" onclick="registerButton()">Register</button>
                    </div>
            </header>
        </div>
    </div>
    </body>
    </html>';
}
?>
<script src="../client/script/index.js"></script>

