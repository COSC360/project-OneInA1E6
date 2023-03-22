<!DOCTYPE html>
<html lang="en">

<head>
  <title>JEMS-EH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/index.css" />
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
          <a href="#" class="nav-link text-black">New</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-black disabled">liked</a>
        </li>
      </ul>
      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-warning text-black me-2" onclick="loginButton()">Login</button>
        <button type="button" class="btn btn-warning">Sign-up</button>
      </div>
    </header>
  </div>
  <div class="container text-center">
    <div class="row p-1 mb-2 bg-white rounded border">
      <div class="col-1">
        <i class="bi-heart" onclick="like(this)"></i>
      </div>
      <div class="col-8">
        <a href="#" class="text-decoration-none">Example post title</a>
      </div>
      <div class="col-3">
        <a href="#" class="text-decoration-none text-muted">example user name</a>
      </div>
    </div>
    <div class="row p-1 mb-2 bg-white rounded border">
      <div class="col">
        <i class="bi-heart" onclick="like(this)"></i>
      </div>
      <div class="col-8">
        <a href="#" class="text-decoration-none">Example Second post title</a>
      </div>
      <div class="col-3">
        <a href="#" class="text-decoration-none text-muted">Other user name</a>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="../script/index.js"></script>

</html>