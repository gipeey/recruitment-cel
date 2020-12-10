<?php 
    include 'conn.php';

        //include
        $jobDate            = $_POST['jobDate'];
        $jobName            = $_POST['jobName'];
        $jobLocation        = $_POST['jobLocation'];
        $jobExp             = $_POST['jobExp'];
        $jobNature          = $_POST['jobNature'];
        $jobDesc            = $_POST['jobDesc'];
        $jobSalary          = $_POST['jobSalary'];

        //include image
        $target_dir = "featuredimg/";
        $jobImg = $target_dir.$jobName.basename($_FILES["jobImg"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($jobImg,PATHINFO_EXTENSION));

        

        // Check if $uploadOk is set to 0 by an error       
        if ($uploadOk == 0) {       
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["jobImg"]["tmp_name"], $jobImg)) {
                echo "Your apply ". htmlspecialchars( basename( $_FILES["jobImg"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your apply.";
            }
         }

         $sql = "INSERT INTO joblist (jobDate, jobName, jobLocation, jobExp, jobNature, jobDesc, jobSalary, jobImg)
         VALUES ('$jobDate', '$jobName', '$jobLocation', '$jobExp', '$jobNature', '$jobDesc', '$jobSalary', '$jobImg')";
         
         if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }

         body('location: post-job.php');
         
         $conn->close();
         ?>