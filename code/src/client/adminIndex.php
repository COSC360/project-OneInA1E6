<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
    include "../client/adminHeader.php";
    include "../database/config.php";

    $sql = "SELECT * FROM threads";

    $result = $conn->query($sql);
    if(isset($_SESSION['loggedIn']) & $_SESSION['admin'] == 'true'){

      $query = $conn->query("SELECT COUNT(content) as numComments, username as names FROM comments GROUP BY names ORDER BY numComments ASC LIMIT 5");
      
      foreach($query as $data){
        $numComments[] = $data['numComments'];
        $usernames[] = $data['names'];
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

<div class= "container rounded-3 mt-2">
  <div class="container text-center">
    <div class="row p-1 mb-2 bg-white rounded border" style = "width:500px;">
  <canvas id="myChart"></canvas>
</div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const labels = <?php echo json_encode($usernames)?>;
const data = {
  labels: labels,
  datasets: [{
    label: 'Top 5 commenting Users',
    data: <?php echo json_encode($numComments)?>,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};

const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

var myChart = new Chart(
  document.getElementById('myChart'),
  config
);





</script>
 











<div class= "container sticky-top rounded-3">
  <div class="container text-center">
    <div class="row p-1 mb-2 bg-white rounded border">
    <table class="table">
      <thead>
        <tr>
          <th>User</th>
          <th>Title</th>
          <th>Category</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody> 
        <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo '<a href="adminThread.php?ID=' , $row['id'] , '">' , $row['title'] , '</a>'; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td></a>&nbsp;<a class="btn btn-danger" href="adminDeleteThread.php?id=<?php echo $row['id']; ?>">Delete</a></td>     
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
      }
      else{
        header('../server/login.php');
      }
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="./script/index.js"></script>
</html>