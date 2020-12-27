<?php 
    include 'conn.php';

        //include
        $inputJob            = $_POST['inputJob'];
        $inputName            = $_POST['inputName'];
        $inputGender        = $_POST['inputGender'];
        $inputEmail             = $_POST['inputEmail'];
        $inputNumber          = $_POST['inputNumber'];
        $inputAddress            = $_POST['inputAddress'];
        $inputPitch          = $_POST['inputPitch'];

        //include image
        $target_dir = "cv/";
        $uploadCV = $target_dir.$inputName.basename($_FILES["uploadCV"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($uploadCV,PATHINFO_EXTENSION));

        //include image
        $target_dir = "applicantphoto/";
        $uploadPhoto = $target_dir.$inputName.basename($_FILES["uploadPhoto"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($uploadPhoto,PATHINFO_EXTENSION));

        

        // Check if $uploadOk is set to 0 by an error       
        if ($uploadOk == 0) {       
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["uploadCV"]["tmp_name"], $uploadCV)) {
                echo "Your CV ". htmlspecialchars( basename( $_FILES["uploadCV"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your apply.";
            }
         }

         // Check if $uploadOk is set to 0 by an error       
        if ($uploadOk == 0) {       
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"], $uploadPhoto)) {
              echo "Your Photo ". htmlspecialchars( basename( $_FILES["uploadPhoto"]["name"])). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your apply.";
          }
       }

         $sql = "INSERT INTO forminput (inputJob, inputName, inputGender, inputEmail, inputNumber, inputAddress, inputPitch, uploadCV, uploadPhoto)
         VALUES ('$inputJob', '$inputName', '$inputGender', '$inputEmail', '$inputNumber', '$inputAddress', '$inputPitch', '$uploadCV', '$uploadPhoto')";
         
         if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }

         header('location: index.php');
         
         $conn->close();
         ?>