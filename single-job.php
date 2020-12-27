<?php
extract($_POST);
$conn=mysqli_connect('localhost','root','','recruitment');

$id   = $_GET['id'];
$sql     = "SELECT * FROM joblist WHERE id = '$id'";
$detail  = mysqli_query($conn, $sql);
$query   = mysqli_fetch_array($detail);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/single-job.css">


    <!-- include summernote css/js -->
    <script src="https://kit.fontawesome.com/cd00a379b0.js" crossorigin="anonymous"></script>

    <title><?php echo $query['jobName'];?></title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light pt-3 pb-3 sticky-top">
        <ul class="navbar-nav mr-3 mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/recruitment-cel/"><i class="fas fa-chevron-circle-left mr-2"></i> Back<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <a class="navbar-brand pl-3" href="http://chandraekajaya.test">Chandra Ekajaya Logistik</a>
    </nav>

    <div class="container">
        <header id="header">
            <div class="jumbotron jumbotron-fluid">
                <div>
                    <img src="<?php echo $query['jobImg'];?>" alt="<?php echo $query['jobName'];?>">
                    <h1 class="display-3"><?php echo $query['jobName'];?></h1>
                </div>
            </div>
        </header>


        <!-- content -->

        <div class="content">
            <div class="row">
                <div class="pl-0 col-sm-8 pr-4">
                    <div class="left">
                        <h3>Job Description</h3>
                        <div class="isiContent"><?php echo $query['jobDesc'];?></div>
                    </div>
                </div>

                <div class="col-sm-4 right">
                    <div class="row">
                        <div class="col-12">
                            <h3>Job Summary</h3>
                        </div>
                        <div class="col-5">
                            <ul class="list-unstyled">
                                <li>Published On</li>
                                <li>Location</li>
                                <li>Experience</li>
                                <li>Job Nature</li>
                                <li>Salary</li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <ul class="list-unstyled">
                                <li>: <?php echo $query['jobDate'];?></li>
                                <li>: <?php echo $query['jobLocation'];?></li>
                                <li>: <?php echo $query['jobExp'];?></li>
                                <li>: <?php echo $query['jobNature'];?></li>
                                <li>: <?php echo $query['jobSalary'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form -->
            <div class="row">
                <div class="col-8 pl-0 pr-4">
                    <form action="input-apply.php" method="post" enctype="multipart/form-data">

                        <h3 class="">Apply Form</h3>
                        <input type="text" class="inputJob" name="inputJob" id="inputJob" value="<?php echo $query['jobName'];?>">
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label for="inputName">Full Name</label>
                                <input type="text" name="inputName" id="inputName" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputGender">Gender</label> <br>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inputGender" id="inputGender"
                                            value="male">Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"
                                            value="Female"> Female
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                                    aria-describedby="inputEmail" placeholder="example@mail.com">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="inputNumber">Phone Number</label>
                                <input type="text" class="form-control" name="inputNumber" id="inputNumber"
                                    aria-describedby="inputPhoneNumber" placeholder="08XX-XXX-XXXX">
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="inputAddress">Address</label>
                                <textarea class="form-control" name="inputAddress" id="inputAddress"
                                    rows="3"></textarea>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="uploadCV">Upload CV</label>
                                <input type="file" class="form-control-file" name="uploadCV" id="uploadCV"
                                    placeholder="Upload Your CV" aria-describedby="uploadCV">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="uploadPhoto">Upload Your Latest Photo</label>
                                <input type="file" class="form-control-file" name="uploadPhoto" id="uploadPhoto"
                                    placeholder="Upload Photo" aria-describedby="uploadPhoto" accept="image/*">
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="inputPitch">Make Your Pitch! (recommended)</label>
                                <textarea class="form-control" name="inputPitch" id="inputPitch" rows="3"
                                    maxlength="300"></textarea>
                                <small class="text-muted">max 300 characters</small>
                            </div>

                            <button type="submit" class="btn btn-primary">Apply!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>