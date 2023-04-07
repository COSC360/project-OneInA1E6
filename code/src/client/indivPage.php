<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
    include "../client/header.php";
    include "../database/config.php";
    $indivName=$_GET['name'];
    $sql = "SELECT * from threads WHERE userName='$indivName'";
    $result = $conn->query($sql);

    //get the individual who's page this is' ID
    $users = "SELECT id FROM users WHERE userName='$indivName'";
    $usersResults = $conn->query($users);
    if ($usersResults->num_rows>0) {
        $indiv = $usersResults->fetch_assoc();
        $indivID = $indiv['id'];
    }
    $loggedin = false;
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']=='true'){
      $loggedin = true;
      $alreadyFollowing = false;
      $userID = $_SESSION['userID'];
      $toCheck = "SELECT * FROM friends WHERE userID='$userID';";
      $followList = $conn->query($toCheck);
      if ($followList->num_rows > 0) {
          while($following = $followList->fetch_assoc()) {
              if ($following['friendID'] == $indivID) {
                  $alreadyFollowing = true;
              }
          }
      }
    }

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
  <div class="container text-center">
    <h1><?php echo $indivName?>'s posts</h1>
    <form onsubmit="follow('<?php echo $indivName?>')" action="#">
    <?php if (!$loggedin) { ?>
      <button type="submit" id="followButton" class="btn btn-primary m-2 disabled" name="name" value="<?php echo $indivName?>">Follow</button>
    <?php } else if ($alreadyFollowing) { ?>
      <button type="submit" id="followButton" class="btn btn-danger m-2" name="name" value="<?php echo $indivName?>">Unfollow</button>
    <?php } else { ?>
      <button type="submit" id="followButton" class="btn btn-primary m-2" name="name" value="<?php echo $indivName?>">Follow</button>
    <?php }?>
      
    </form>
    <span id="update" class="m-2"></span>
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
              while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>  
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo '<a href="thread.php?ID=' , $row['id'] , '">' , $row['title'] , '</a>'; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['familyFriendly']; ?></td>
                    <td><?php echo $row['friendsOnly']; ?> </td>
                    </tr>                       
        <?php
          }
        }
        ?>                
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
<script> 
function follow(name) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        if (this.responseText === 'Unfollowed'){
          document.getElementById("followButton").innerHTML='Follow';
          document.getElementById("followButton").className="btn btn-primary m-2";
          document.getElementById("update").innerHTML="Unfollowed";
        } else if (this.responseText === 'Followed') {
          document.getElementById("followButton").innerHTML='Unfollow';
          document.getElementById("followButton").className="btn btn-danger m-2";
          document.getElementById("update").innerHTML="Followed";
        }
        
      }
    };
    xmlhttp.open("GET", "../server/followUser.php?follow="+name, true);
    //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}
</script>
</html>