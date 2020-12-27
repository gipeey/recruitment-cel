<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="https://kit.fontawesome.com/cd00a379b0.js" crossorigin="anonymous"></script>

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
                    <a href="#joblist" class="btn btn-primary">Browse Job</a>
                </div>
                <div class="backHome">
                    <a href="http://chandraekajaya.test" class="btn btn-secondary">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>


    <?php include('db-conn.php'); ?>
    <!-- filter -->
    <div class="container content">
        <!-- <form action=""> -->

        <div class="row form-group filter">

            <div class="col-sm">
                <h3>Location</h3>
                <?php // Filter Location
      $query = "SELECT DISTINCT(jobLocation) FROM joblist WHERE jobStatus = '1' ORDER BY jobLocation DESC";
      $statement = $conn->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      foreach($result as $row)
      {
      ?>
                <label><input type="checkbox" class="common_selector location"
                        value="<?php echo $row['jobLocation'];?>">
                    <?php echo $row['jobLocation'];?></label> <br>
                <?php } ?>
                </select>
            </div>





            <div class="col-sm">
                <h3>Experience</h3>
                <?php //filter experience
      $query = "SELECT DISTINCT(jobExp) FROM joblist WHERE jobStatus = '1' ORDER BY jobExp DESC";
      $statement = $conn->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      foreach($result as $row)
      {
      ?>
                <label><input type="checkbox" class="common_selector experience" value="<?php echo $row['jobExp'];?>">
                    <?php echo $row['jobExp'];?></label> <br>
                <?php } ?>
                </select>
            </div>






            <div class="col-sm">
                <h3>Job Nature</h3>
                <?php // filter nature
      $query = "SELECT DISTINCT(jobNature) FROM joblist WHERE jobStatus = '1' ORDER BY jobNature DESC";
      $statement = $conn->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      foreach($result as $row)
      {
      ?>
                <label><input type="checkbox" class="common_selector nature" value="<?php echo $row['jobNature'];?>">
                    <?php echo $row['jobNature'];?></label> <br>
                <?php } ?>
                </select>
            </div>

        </div>

        <!-- </form> -->
    </div>

    <!-- result -->
    <div class="container joblist" id="joblist">

        <div class="filter_data">


        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>



    <script>
    $(document).ready(function() {

        filter_data();

        function filter_data() {
            $('.filter_data');
            var action = 'fetch_data';
            var location = get_filter('location');
            var experience = get_filter('experience');
            var nature = get_filter('nature');
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    action: action,
                    location: location,
                    experience: experience,
                    nature: nature
                },
                success: function(data) {
                    $('.filter_data').html(data).fadeOut('0').fadeIn('slow');
                }
            });
        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function() {
            filter_data();
        });

    });
    </script>

</body>

</html>