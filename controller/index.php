<?php
  include 'connection.php';
  $sql = mysqli_query($db_connect, "SELECT * FROM tb_control");
  while($row = mysqli_fetch_assoc($sql)){
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-light bg-light mb-2">
      <div class="container container-fluid">
        <a class="navbar-brand" href="#">Controller</a>
      </div>
    </nav>
    
    <div class="container">
      <!-- button 1 -->
      <div class="card text-center mb-4">
        <div class="card-header">
          channel 1
        </div>
        <div class="card-body">
          <h5 class="card-title">
            <?php
              if($row['lampu1'] == 0)
                echo 'OFF';
              else  echo 'ON';
            ?>
          </h5>
          <a href="aksi.php?channel=1&state=1" class="btn btn-success">ON</a>
          <a href="aksi.php?channel=1&state=0" class="btn btn-danger">OFF</a>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>
      <!-- button 2 -->
      <div class="card text-center">
        <div class="card-header">
          channel 2
        </div>
        <div class="card-body">
          <h5 class="card-title">
            <?php
              if($row['lampu2'] == 0)
                echo 'OFF';
              else  echo 'ON';
            ?>
          </h5>
          <a href="aksi.php?channel=2&state=1" class="btn btn-success">ON</a>
          <a href="aksi.php?channel=2&state=0" class="btn btn-danger">OFF</a>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>

    </div>

    <?php
      }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>