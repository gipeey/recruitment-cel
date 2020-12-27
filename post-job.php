<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/post-job.css">


    <!-- include summernote css/js -->
    <link rel="stylesheet" href="plugins/summernote-0.8.18-dist/summernote.css">


    <title>Post a Job</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <!-- title -->
    <h1 class="title">Create a Job List</h1>

    <!-- content -->

    <div class="container">

        <div class="row">

            <div class="col-2 nav-tab">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-inputJob-list" data-toggle="list"
                        href="#list-inputJob" role="tab" aria-controls="inputJob">Input form</a>
                    <a class="list-group-item list-group-item-action" id="list-job-list" data-toggle="list"
                        href="#list-job" role="tab" aria-controls="job">List Job</a>
                </div>
            </div>

            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="list-inputJob" role="tabpanel"
                        aria-labelledby="list-inputJob-list">
                        <form action="toSQL.php" method="post" enctype="multipart/form-data">
                            <!-- form start -->


                            <div class="row form-group align-center">
                                <!-- image -->
                                <label for="jobImg" class="col-sm-2">Featured Images</label>
                                <div class="col-10 pt-2">
                                    <input type="file" accept="image/*" name="jobImg" id="jobImg"
                                        class="form-control-file">
                                </div>
                            </div>

                            <div class="row form-group align-center">
                                <!-- Date -->
                                <label for="jobDate" class="col-sm-2">Date</label>
                                <div class="col-3">
                                    <input type="date" name="jobDate" id="jobDate" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group align-center">
                                <!-- Job Name -->
                                <label for="jobName" class="col-sm-2">Job Name</label>
                                <div class="col-10">
                                    <input type="text" name="jobName" id="jobName" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group align-center">
                                <!-- Job Location -->
                                <label for="jobLocation" class="col-sm-2">Location</label>
                                <div class="col-10">
                                    <select name="jobLocation" id="jobLocation" class="form-control">
                                        <option class="dropdown-item" value="office1">Office 1</option>
                                        <option class="dropdown-item" value="office2">Office 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group align-center">
                                <!-- Job Experience -->
                                <label for="jobExp" class="col-sm-2">Experience</label>
                                <div class="col-10">
                                    <select name="jobExp" id="jobExp" class="form-control">
                                        <option class="dropdown-item" value="Fresh Graduate">Fresh Graduate</option>
                                        <option class="dropdown-item" value="Experienced">Experienced</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group align-center">
                                <!-- Job Nature -->
                                <label for="jobNature" class="col-sm-2">Job Nature</label>
                                <div class="col-10">
                                    <select name="jobNature" id="jobNature" class="form-control">
                                        <option class="dropdown-item" value="Full-time">Full-time</option>
                                        <option class="dropdown-item" value="Part-time">Part-time</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group jobDesc">
                                <!-- Job Desc -->
                                <label for="jobDesc" class="col-sm-2">Job Description</label>
                                <div class="col-10">
                                    <textarea name="jobDesc" id="jobDesc" cols="30" rows="5"
                                        class="bg-white"></textarea>
                                </div>
                            </div>

                            <div class="row form-group align-center">
                                <!-- Job Salary -->
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
                        $query = mysqli_query($conn,"SELECT * FROM joblist ORDER BY id ASC");?>
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
                                        <td class="text-center">
                                            <a href="edit-job.php?id=<?php echo $data['id'];?>" target="_blank"
                                                class="btn btn-primary">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#delete<?php echo $data['id'];?>">Delete</button>


                                            <!-- Modal -->
                                            <div class="modal fade" id="delete<?php echo $data['id'];?>" tabindex="-1" role="dialog"
                                                aria-labelledby="deleteModal" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete!</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are You sure want to DELETE this data?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success"
                                                                data-dismiss="modal">Cancel</button>
                                                            <a href="delete-job.php?id=<?php echo $data['id'];?>&jobName=<?php echo $data['jobName'];?>"><button
                                                                    type="button"
                                                                    class="btn btn-danger">Delete</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <a href="list-applicant.php?inputJob=<?php echo $data['jobName'];?>"
                                                target="_blank" class="btn btn-success">List Applicant</a>
                                        </td>
                                    </tr>
                                    <?php $no++; } ?>
                                    <?php } ?>

                                </tbody>
                            </table>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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


</body>

</html>