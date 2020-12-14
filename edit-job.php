<?php include 'conn.php';

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: post-job.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM joblist WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edit-job.css">


<!-- include summernote css/js -->
    <link rel="stylesheet" href="plugins/summernote-0.8.18-dist/summernote.css">


    <title>Post a Job</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>


<div class="container tab-pane fade show active" id="list-inputJob" role="tabpanel" aria-labelledby="list-inputJob-list">
                        <form action="editSQL.php" method="post" enctype="multipart/form-data"> <!-- form start -->

                                    <input type="text" name="id" class="id" value="<?php echo $row['id'];?>">
                            <div class="row form-group align-center"> <!-- image -->
                                    <label for="jobImg" class="col-sm-2">Featured Images</label>
                                <div class="col-10 pt-2">
                                    <img src="<?php echo $row['jobImg']; ?>" alt="featured images">
                                    <input type="file" accept="image/*" name="jobImg" id="jobImg" class="form-control-file" value="<?php echo $row['jobImg']; ?>" >
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Date -->
                                    <label for="jobDate" class="col-sm-2">Date</label>
                                <div class="col-3">
                                    <input type="date" name="jobDate" id="jobDate" class="form-control" value="<?php echo $row['jobDate'] ?>">
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Name -->
                                    <label for="jobName" class="col-sm-2">Job Name</label>
                                <div class="col-10">
                                    <input type="text" name="jobName" id="jobName" class="form-control" value="<?php echo $row['jobName'] ?>">
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Location -->
                                    <label for="jobLocation" class="col-sm-2">Location</label>
			                            <?php $jl = $row['jobLocation']; ?>
                                <div class="col-10">
                                    <select name="jobLocation" id="jobLocation" class="form-control">
				                        <option class="dropdown-item" <?php echo ($jl == 'office1') ? "selected": "" ?>>Office 1</option>
				                        <option class="dropdown-item" <?php echo ($jl == 'office2') ? "selected": "" ?>>Office 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Experience -->
                                    <label for="jobExp" class="col-sm-2">Experience</label>
			                            <?php $je = $row['jobExp']; ?>
                                <div class="col-10">
                                    <select name="jobExp" id="jobExp" class="form-control">
				                        <option class="dropdown-item" <?php echo ($je == 'Fresh Graduate') ? "selected": "" ?>>Fresh Graduate</option>
				                        <option class="dropdown-item" <?php echo ($je == 'Experienced') ? "selected": "" ?>>Experienced</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Nature -->
                                    <label for="jobNature" class="col-sm-2">Job Nature</label>
			                            <?php $jn = $row['jobNature']; ?>
                                <div class="col-10">
                                    <select name="jobNature" id="jobNature" class="form-control">
                                    <option class="dropdown-item" <?php echo ($jn == 'Full-time') ? "selected": "" ?>>Full-Time</option>
				                        <option class="dropdown-item" <?php echo ($jn == 'Part-time') ? "selected": "" ?>>Part-time</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group jobDesc"> <!-- Job Desc -->
                                    <label for="jobDesc" class="col-sm-2">Job Description</label>
                                <div class="col-10">
                                    <textarea name="jobDesc" id="jobDesc" cols="30" rows="5" class="bg-white"><?php echo $row['jobDesc'] ?></textarea>
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Salary -->
                                    <label for="jobSalary" class="col-sm-2">Salary</label>
                                <div class="col-10">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                        <input type="text" class="form-control" name="jobSalary" id="jobSalary" value="<?php echo $row['jobSalary'] ?>">
                                    </div>  
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form> <!-- form end -->
                    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="plugins/summernote-0.8.18-dist/summernote.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#jobDesc').summernote({
                height: "300px",
                styleWithSpan: false
                });
            }); 
            </script>


    

</body>