<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../client/css/index.css" />

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        
<?php
include "../client/header.php";

echo '
<body>
    <form method="post" action="registerUser.php" id="mainForm" enctype="multipart/form-data">
    First Name:<br>
    <input type="text" name="firstName" id="firstName" class="required">
    <br>
    Last Name:<br>
    <input type="text" name="lastName" id="lastName" class="required">
    <br>
    Username:<br>
    <input type="text" name="userName" id="userName" class="required">
    <br>
    email:<br>
    <input type="text" name="email" id="email" class="required">
    <br>
    Password:<br>
    <input type="password" name="password" id="password" class="required">
    <br>
    Re-enter Password:<br>
    <input type="password" name="password-check" id="password-check" class="required">
    <br>

    <br><br>
    <input type="submit" value="Create New User" onsubmit="checkPasswordMatch()">
    </form>
  </body>
';

include "../client/footer.php";

?>