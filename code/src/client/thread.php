<?php

    include "../client/header.php";
    include "../database/config.php";
    $threadID = $_GET['ID'];
    $sql = "SELECT * FROM threads WHERE id = '$threadID'";

    $result = $conn->query($sql);
?>

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
  <link rel="stylesheet" href="./css/register.css" />

</head>


<body>
  <div class= "container sticky-top rounded-3">
  <div class="container">
    <div class="row p-1 mb-2 bg-white rounded border">
        <table class="table">
        <thead>
            <tr>
            <th>User</th>
            <th>Title</th>
            <th>Category</th>
            <th>Family Friendly</th>
            <th>Friends Only</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                if ($result->num_rows > 0) {
                    $thread = $result->fetch_assoc();
            ?>
                        <tr>
                        <td><?php echo $thread['userName']; ?></td>
                        <td><?php echo $thread['title']; ?></td>
                        <td><?php echo $thread['category']; ?></td>
                        <td><?php echo $thread['familyFriendly']; ?></td>
                        <td><?php echo $thread['friendsOnly']; ?> </td>
                        </tr>
            <?php
            
            }
            ?>                
        </tbody>
        </table>
        <div> 
            <?php echo $thread['description']; ?>
        </div>
    </div>
    <div class="row p-1 mb-2 bg-white rounded border">
        <table>
            <thead>
                <h3>Comments: </h3>
            </thead>
            <tbody>
                <tr>
                    
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
</body>

<?php
include "../client/footer.php";
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="./script/index.js"></script>
</html>