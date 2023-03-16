<!DOCTYPE html>
<html>
  <head>
    <title>JEMS-EH Sign In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/login.css" />
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
  crossorigin="anonymous"></script>

<body>
  <div class="container sticky-top bg-white rounded-3">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark">
        <!-- logo -->
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
  <main class="form-signin w-50 m-auto align-items-center ">    
    <form>
      <h1 class="h3 mb-3 fw-normal">Jems-Eh Sign In</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
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