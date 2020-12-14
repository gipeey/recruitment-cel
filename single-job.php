<?php extract($_POST);
        $conn = mysqli_connect('localhost', 'root', '', 'recruitment'); ?>

<?php 
$id     = $_GET['id'];
$sql    = "SELECT * FROM joblist WHERE id = '$id'";
$detail = mysqli_query($conn, $sql);
$query  = mysqli_fetch_array($detail);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/single-job.css">


<!-- include font awesome css/js -->
    <script src="https://kit.fontawesome.com/cd00a379b0.js" crossorigin="anonymous"></script>


    <title>Job Name</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>  

<!-- Nav -->
<nav class="navbar sticky-top">
    <div class="navbar-item">
        <span class="nav-link backbtn">
            <a href="http://recruitment-cel.test" class="nav-link"><i class="mr-3 fas fa-chevron-circle-left"></i>Back</a>
        </span>

        <span class="nav-brand company">
            <a href="http://chandraekajaya.test" target="_blank" class="nav-link">Chandra Ekajaya Logistik</a>
        </span>
    </div>
</nav>


<!-- header -->
<div class="container" id="header">

    <div class="jobtitle">
            <img src="<?php echo $query['jobImg']; ?>" alt="featuredimg" class="img-fluid">
        <div class="title">
            <h1><?php echo $query['jobName']; ?></h1>
        </div>
    </div>
</div>


<!-- content -->


    <div class="row content-header">
        <div class="col-8 left-side">
            <div class="jobdesc">
                <h2>JOB DESCRIPTION</h2>
            </div>
            <div class="desccont">
                <span><?php echo $query['jobDesc']; ?></span>
            </div>


            <!-- form apply -->
            <form action="SQL.php" method="post" enctype="multipart/form-data">
                <h2 class="mb-4">APPLY FOR A JOB</h2>
                <input type="text" name="formJob" id="formJob" class="formJob" value="<?php echo $query['jobName']; ?>">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="formName">Full Name</label>
                        <input type="text" name="formName" id="formName" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="col-6">
                        <label for="formGender">Gender</label>
                        <div class="form-inline">
                            <div class="form-check mr-3">
                                <input type="radio" name="formGender" id="male" value="male" class="form-check-input">
                                <label for="male" class="form-check-label text-normal">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="formGender" id="female" value="female" class="form-check-input">
                                <label for="female" class="form-check-label text-normal">Female</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="formEmail">Email</label>
                        <input type="email" name="formEmail" id="formEmail" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="col-6">
                        <label for="formPhone">Phone Number</label>
                        <input type="text" name="formPhone" id="formPhone" class="form-control" placeholder="085745645645">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <label for="formAddress">Address</label>
                        <textarea name="formAddress" id="formAddress" cols="12" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="formCv">Upload Your CV</label>
                        <input type="file" name="formCv" id="formCv" class="form-control-file">
                    </div>
                    <div class="col-6">
                        <label for="formCv">Upload Photo</label>
                        <input type="file" name="formPhoto" id="formPhoto" class="form-control-file">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <label for="formPitch">Make Your Pitch!</label>
                        <textarea name="formPitch" id="formPitch" cols="12" rows="3" maxlength="300" class="form-control"></textarea>
                        <small id="formPitchHelp" class="form-text text-muted">max 300 characters</small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Apply</button>
            </form>
        </div>

        <div class="col-4 right-side">
            <div class="box">
                <div class="jobsum">
                    <h2>JOB SUMMARY</h2>
                </div>
                <div class="sumcont row">
                    <dl class="row">
                        <dt class="col-5">Published on</dt>
                            <dd class="col-7">: <?php echo $query['jobDate']; ?></dd>
                        
                        <dt class="col-5">Location</dt>
                            <dd class="col-7">: <?php echo $query['jobLocation']; ?></dd>
                    
                        <dt class="col-5">Job Nature</dt>
                            <dd class="col-7">: <?php echo $query['jobNature']; ?></dd>
                        <dt class="col-5">Salary</dt>
                            <dd class="col-7">: Rp <?php echo $query['jobSalary']; ?></dd>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>