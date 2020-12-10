<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>CHANDRA EKAJAYA LOGISTIK : RECRUITMENT</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    
  </head>
  <body>

  <div class="container px-0 header">
    <div class="title">
      <h2>Chandra Ekajaya Logistik</h2>
      <h1>Open Recruitment</h1>
      <div class="navBtn">
        <div class="browseJob">
          <a href="#" class="btn btn-primary">Browse Job</a>
        </div>
        <div class="backHome">
          <a href="#" class="btn btn-secondary">Back to Homepage</a>
        </div>
      </div>
      </div>
  </div>

<!-- filter -->
  <div class="container content">
    <form action="">

    <div class="row form-group filter">
      <div class="col-sm">
        <input type="text" name="filterName" placeholder="Job Name..." class="form-control">
        </select>
      </div>

      <div class="col-sm">
        <select name="filterLocation" id="filterLocation" class="form-control">
          <option value="all location">All Location</option>
          <option value="office1">Office 1</option>
          <option value="office2">Office 2</option>
        </select>
      </div>

      <div class="col-sm">
        <select name="filterExp" id="filterExp" class="form-control">
          <option value="experience">Experience</option>
          <option value="Fresh Graduate">Fresh Graduate</option>
          <option value="Experienced">Experienced</option>
        </select>
      </div>

      <div class="col-sm">
        <select name="filterNature" id="filterNature" class="form-control">
          <option value="all nature">Job Type</option>
          <option value="full-time">Full-time</option>
          <option value="part-time">Part-time</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Search</button>
    </div>

    </form>
  </div>

  <!-- result -->
  <div class="container result">

    <?php /*include 'conn.php';
        $query = mysqli_query($conn,"SELECT * FROM joblist ORDER BY id ASC");?>
    <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){ */
        ?>
        <div class="row">
          <div class="col-sm col-sm-2">
              <img src="img/logo.png" alt="jobimage" class="col-sm">
          </div class="col-sm">
              <a class="col-sm-8" href="#"><h3>title</h3></a>
              <span>location</span>
              <span>experience</span>
        </div>
  </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>