<?php
extract($_POST);
$conn=mysqli_connect('localhost','root','','recruitment');

$inputJob   = $_GET['inputJob'];
$sql     = "SELECT * FROM forminput WHERE inputJob = '$inputJob'";
$detail  = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/list-applicant.css">


    <!-- include summernote css/js -->
    <script src="https://kit.fontawesome.com/cd00a379b0.js" crossorigin="anonymous"></script>

    <title>List Applicant</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>

<!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light pt-3 pb-3 sticky-top">
        <ul class="navbar-nav mr-3 mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="post-job.php"><i class="fas fa-chevron-circle-left mr-2"></i> Back<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <h3 class="navbar-brand pl-3" >List Applicant Data</h3>
    </nav>

<div class="">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Name</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Address</th>
                <th class="text-center">CV</th>
                <th class="text-center">Photo</th>
                <th class="text-center">Pitch</th>
            </tr>
        </thead>

        <?php if(mysqli_num_rows($detail)>0){ ?>
        <?php
        $no = 1;
        while($query = mysqli_fetch_array($detail)){ ?>
        <tbody>
        
            <tr>
                <td scope="row" class="text-center"><?php echo $no;?></td>
                <td><?php echo $query['inputName'];?></td>
                <td class="text-center"><?php echo $query['inputGender'];?></td>
                <td><?php echo $query['inputEmail'];?></td>
                <td><?php echo $query['inputNumber'];?></td>
                <td><?php echo $query['inputAddress'];?></td>
                <td><a href="<?php echo $query['uploadCV'];?>">CV</a></td>
                <td class="text-center"><img src="<?php echo $query['uploadPhoto'];?>" alt="<?php echo $query['inputName'];?>" class="Photo"></td>
                <td><?php echo $query['inputPitch'];?> </td>
            </tr>
        </tbody>
        <?php $no++; } ?>
    <?php } ?>
    </table>
</div>


        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>




