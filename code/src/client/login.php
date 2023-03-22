<?php

echo '
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

  
    <form action = "../../server/login.php>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>


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

</body>';

?>