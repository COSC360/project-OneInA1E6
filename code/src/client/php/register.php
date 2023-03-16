<!DOCTYPE html>
<html>
  <head>
    <title>JEMS-EH Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/register.css" />
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="../script/register.js"></script>

<body>
  <div class="container sticky-top bg-white rounded-3">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark">
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
    </header>
  </div>
  <main class="form-signin m-auto align-items-center ">    
    <form id = "mainForm">
      <h1 class="h3 mb-3 fw-normal">Register New Account</h1>
        
      <div class="form-floating">
        <input type="userName" class="form-control required" id="floatingInput" placeholder="userName">
        <label for="floatingInput">User Name</label>
      </div>

      <div class="form-floating">
        <input type="firstName" class="form-control required" id="floatingInput" placeholder="John">
        <label for="floatingInput">First Name</label>
      </div>
      <div class="form-floating">
        <input type="lastName" class="form-control required" id="floatingInput" placeholder="Appleseed">
        <label for="floatingInput">Last Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control required" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control required" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class = "inputFile">
        <label for="profileImage" class = "required">Profile Picture:</label>
        <input type="file" id="profileImage" name="profileImage" accept="image/png, image/jpeg">
      </div>
      
      <div class = "terms">
        <label>I accept the <a href="#">Terms and Conditions</a></label>
        <input type="checkbox" name="accept" class="required">
       </div>
      <button class="w-100 btn m-auto btn-lg btn-primary" type="submit">Create Account</button>
    </form>
  </main>

  <footer>
   <div class="footer-related">
      <h2>Terms and Conditions </h2>
      <div>
        You can review the terms and conditions <a href="#">here</a>
      </div>
   </div>
   <div class="footer-section">
    <h2>About Us</h2>
    <p>This is a basic representation of Jems-Eh Login Page</p>
    <p>&copy; Copyright 2023 Company X
    </div>
</footer>
</body>