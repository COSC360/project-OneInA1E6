<!DOCTYPE html>
<html lang="en">

<head>
  <title>JEMS-EH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/index.css" />
  
</head>

<body>
  <div class= "container sticky-top rounded-3">

  <?php

  include "../client/header.php";
  include ("../server/createThread.php")
  ?>
  
        <div class="container text-right">
            <div class="row p-1 mb-5 bg-white rounded border">
                <h1>Create New Thread</h1>
            </div>
        </div>

    <form action="create.php" method="post">
    <?php include('../client/errors.php'); ?>
        <div class="form-group text-right">
        <div class="row p-1 mb-2 bg-white rounded border">
            
                <label for="title" class = "mb-1"><h2>Thread Title</h2></label>
                <input type="text" name = "title" class = "mb-1"/>
                
                <label for = "category" class = "mb-1"><h4>Category Name</h4></label>
                <input type="text" name = "category" class = "mb-1"/>
                <br>

                <input type="checkbox" name="familyFriendly" value="yes"> 
                <label for="familyFriendly"><h4>Family Friendly</h4></label>
                <br>
                <hr>

                <input type="checkbox" name="friendsOnly" value="yes">
                <label for="friendsOnly"><h4>Friends Only</h4></label>
                <br>
                <hr>

                
                <br>              
                
                <label for="description" class = "mb-1"><h4>Description:</h4></label>
                <br>
                <textarea id="description" name="description" rows="8" cols="50" class = "mb-1">
Enter Description here...
                </textarea>
                
                <br>
                <br>
                <div class="input-group btn btn-primary">
  	              <button type="submit" class="btn" name="submit">Submit</button>
  	            </div>          
        </div>
        </div>
    </form>
  </div>
</body>
</html>


