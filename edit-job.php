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
    <link rel="stylesheet" href="css/edit-job.css">


<!-- include summernote css/js -->
    <link rel="stylesheet" href="plugins/summernote-0.8.18-dist/summernote.css">


    <title>Edit : <?php echo $query['jobName'];?></title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>

<div class="container">
    <div class="header">
        <img src="<?php echo $query['jobImg']?>" class="text-center" alt="<?php echo $query['jobName']?>">
        <h3 class="text-center mb-5">Edit : <?php echo $query['jobName'];?></h3>
    </div>
    
<form action="updateSQL.php" method="post" enctype="multipart/form-data"> <!-- form start -->

    <input type="hidden" name="id" value="<?php echo $query['id'];?>">
    <input name="jobStatus" type="hidden" value="'1'">

    <div class="row form-group align-center"> <!-- image -->
            <label for="jobImg" class="col-sm-2">Featured Images</label>
        <div class="col-10 pt-2">
            <input type="file" accept="image/*" name="jobImg" id="jobImg" class="form-control-file">
        </div>
    </div>

    <div class="row form-group align-center"> <!-- Date -->
            <label for="jobDate" class="col-sm-2">Date</label>
        <div class="col-3">
            <input type="date" name="jobDate" id="jobDate" class="form-control" value="<?php echo $query['jobDate'];?>">
        </div>
    </div>

    <div class="row form-group align-center"> <!-- Job Name -->
            <label for="jobName" class="col-sm-2">Job Name</label>
        <div class="col-10">
            <input type="text" name="jobName" id="jobName" class="form-control" value="<?php echo $query['jobName'];?>">
        </div>
    </div>

    <div class="row form-group align-center"> <!-- Job Location -->
            <label for="jobLocation" class="col-sm-2">Location</label>
        <div class="col-10">
            <select name="jobLocation" id="jobLocation" class="form-control">
                <option class="dropdown-item" value="office1"<?php if ($query['jobLocation'] === 'office1') echo 'selected="selected"'?>>Office 1</option>
                <option class="dropdown-item" value="office2"<?php if ($query['jobLocation'] === 'office2') echo 'selected="selected"'?>>Office 2</option>
            </select>
        </div>
    </div>

    <div class="row form-group align-center"> <!-- Job Experience -->
            <label for="jobExp" class="col-sm-2">Experience</label>
        <div class="col-10">
            <select name="jobExp" id="jobExp" class="form-control">
                <option class="dropdown-item" value="Fresh Graduate"<?php if ($query['jobExp'] === 'Fresh Graduate') echo 'selected="selected"'?>>Fresh Graduate</option>
                <option class="dropdown-item" value="Experienced"<?php if ($query['jobExp'] === 'Experienced') echo 'selected="selected"'?>>Experienced</option>
            </select>
        </div>
    </div>

    <div class="row form-group align-center"> <!-- Job Nature -->
            <label for="jobNature" class="col-sm-2">Job Nature</label>
        <div class="col-10">
            <select name="jobNature" id="jobNature" class="form-control">
                <option class="dropdown-item" value="Full-time"<?php if ($query['jobNature'] === 'Full-time') echo 'selected="selected"'?>>Full-time</option>
                <option class="dropdown-item" value="Part-time"<?php if ($query['jobNature'] === 'Part-time') echo 'selected="selected"'?>>Part-time</option>
            </select>
        </div>
    </div>

    <div class="row form-group jobDesc"> <!-- Job Desc -->
            <label for="jobDesc" class="col-sm-2">Job Description</label>
        <div class="col-10">
            <textarea name="jobDesc" id="jobDesc" cols="30" rows="5" class="bg-white"><?php echo $query['jobDesc'];?></textarea>
        </div>
    </div>

    <div class="row form-group align-center"> <!-- Job Salary -->
            <label for="jobSalary" class="col-sm-2">Salary</label>
        <div class="col-10">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Rp</span>
            </div>
                <input type="text" class="form-control" name="jobSalary" id="jobSalary" value="<?php echo $query['jobSalary'];?>">
            </div>  
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/summernote-0.8.18-dist/summernote.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#jobDesc').summernote({
                height: "300px",
                styleWithSpan: false
                });
            }); 
            </script>
    

</form> <!-- form end -->
</div>