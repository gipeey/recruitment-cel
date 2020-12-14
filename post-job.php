<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/post-job.css">


<!-- include summernote css/js -->
    <link rel="stylesheet" href="plugins/summernote-0.8.18-dist/summernote.css">


    <title>Post a Job</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- title -->
    <h1 class="title" id="header">Create a Job List</h1>

    <!-- content -->

    <div class="container">

        <div class="row">

            <div class="col-2 nav-tab">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-inputJob-list" data-toggle="list" href="#list-inputJob" role="tab" aria-controls="inputJob">Input form</a>
                <a class="list-group-item list-group-item-action" id="list-job-list" data-toggle="list" href="#list-job" role="tab" aria-controls="job">List Job</a>
                <a class="list-group-item list-group-item-action" id="list-job-list" data-toggle="list" href="#list-jobapplicantdata" role="tab" aria-controls="job">Job Applicant Data</a>
                </div>
            </div>

            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="list-inputJob" role="tabpanel" aria-labelledby="list-inputJob-list">
                        <form action="toSQL.php" method="post" enctype="multipart/form-data"> <!-- form start -->

                            <div class="row form-group align-center"> <!-- image -->
                                    <label for="jobImg" class="col-sm-2">Featured Images</label>
                                <div class="col-10 pt-2">
                                    <input type="file" accept="image/*" name="jobImg" id="jobImg" class="form-control-file">
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Date -->
                                    <label for="jobDate" class="col-sm-2">Date</label>
                                <div class="col-3">
                                    <input type="date" name="jobDate" id="jobDate" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Name -->
                                    <label for="jobName" class="col-sm-2">Job Name</label>
                                <div class="col-10">
                                    <input type="text" name="jobName" id="jobName" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Location -->
                                    <label for="jobLocation" class="col-sm-2">Location</label>
                                <div class="col-10">
                                    <select name="jobLocation" id="jobLocation" class="form-control">
                                        <option class="dropdown-item" value="office1">Office 1</option>
                                        <option class="dropdown-item" value="office2">Office 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Experience -->
                                    <label for="jobExp" class="col-sm-2">Experience</label>
                                <div class="col-10">
                                    <select name="jobExp" id="jobExp" class="form-control">
                                        <option class="dropdown-item" value="Fresh Graduate">Fresh Graduate</option>
                                        <option class="dropdown-item" value="Experienced">Experienced</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Nature -->
                                    <label for="jobNature" class="col-sm-2">Job Nature</label>
                                <div class="col-10">
                                    <select name="jobNature" id="jobNature" class="form-control">
                                        <option class="dropdown-item" value="Full-time">Full-time</option>
                                        <option class="dropdown-item" value="Part-time">Part-time</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group jobDesc"> <!-- Job Desc -->
                                    <label for="jobDesc" class="col-sm-2">Job Description</label>
                                <div class="col-10">
                                    <textarea name="jobDesc" id="jobDesc" cols="30" rows="5" class="bg-white"></textarea>
                                </div>
                            </div>

                            <div class="row form-group align-center"> <!-- Job Salary -->
                                    <label for="jobSalary" class="col-sm-2">Salary</label>
                                <div class="col-10">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                        <input type="text" class="form-control" name="jobSalary" id="jobSalary">
                                    </div>  
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form> <!-- form end -->
                    </div>

                    <div class="tab-pane fade list-job" id="list-job" role="tabpanel" aria-labelledby="list-job-list">

                    <?php include 'conn.php';
                    $query = mysqli_query($conn,"SELECT * FROM joblist ORDER BY id DESC");?>
                        <form action="">

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Date</th>
                                <th scope="col">Job Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Salary</th>
                                <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(mysqli_num_rows($query)>0){ ?>
                                    <?php
                                        $no = 1;
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data["jobDate"];?></td>
                                        <td><?php echo $data["jobName"];?></td>
                                        <td><?php echo $data["jobLocation"]; ?> </td>
                                        <td><?php echo $data["jobSalary"]; ?></td>
                                        <td class="text-center"><?php
                                        echo "<a href='edit-job.php?id=".$data['id']."'>Edit</a>";
                                        echo "<a href='delete-job.php?id=".$data['id']."'>Delete</a>";
                                        ?></td>
                                    </tr>
                                    <?php $no++; } ?>
                                    <?php } ?>

                            </tbody>
                            </table>

                        </form>
                    </div>

                    <div class="tab-pane fade list-applicant" id="list-jobapplicantdata" role="tabpanel" aria-labelledby="list-job-list">
                    
<?php extract($_POST);
$conn=mysqli_connect('localhost', 'root', '', 'recruitment'); ?>

<?php //show result
$sql = "SELECT * FROM form_apply ORDER BY formJob DESC";?>

                        <table class="table">
                            <thead>
                                <tr class="row text-center">
                                    <th scope="col" class="col-1 tabNo">No</th>
                                    <th scope="col" class="col-1 tabJob">Job</th>
                                    <th scope="col" class="col-3 tabName">Applicant Name</th>
                                    <th scope="col" class="col-3 tabEmail">Email</th>
                                    <th scope="col" class="col-2 tabPhone">Phone Number</th>
                                    <th scope="col" class="col-1 tabCv">CV</th>
                                    <th scope="col" class="col-1 tabCv">Action</th>
                                </tr>
                            </thead>
<?php $result = $conn->query($sql);
$no = 1;
if ($result->num_rows > 0) {
while ( $row = $result->fetch_assoc()): ?>
                            <tbody>
                                <tr class="row">
                                    <td scope="col" class="col-1 text-center tabNo"><?php echo $no; ?></td>
                                    <td scope="col" class="col-1 tabJob"><?php echo $row["formJob"]; ?></td>
                                    <td scope="col" class="col-3 tabName"><?php echo $row["formName"]; ?></td>
                                    <td scope="col" class="col-3 tabEmail"><?php echo $row["formEmail"]; ?></td>
                                    <td scope="col" class="col-2 tabPhone"><?php echo $row["formPhone"]; ?></td>
                                    <td scope="col" class="col-1 text-center tabCv"><a href="<?php echo $row["formCv"]; ?>">CV</a></td>
                                    <td scope="col" class="col-1 text-center tabCv"><a href="single-applicant.php?id=<?php echo $row["id"];?>">more</a></td>
                                </tr>

<?php $no++; endwhile; 
    } else { 
    echo "0 results";
    } $conn->close();?>
                            </tbody>
                        </table>

                        
                    
                    </div>
                    
                </div>
            </div>
        </div>

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
</html>