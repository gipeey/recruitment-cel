<?php include 'conn.php';


//include
        $formJob            = $_POST['formJob'];
        $formName            = $_POST['formName'];
        $formGender        = $_POST['formGender'];
        $formEmail             = $_POST['formEmail'];
        $formPhone          = $_POST['formPhone'];
        $formAddress        = $_POST['formAddress'];
        $formPitch            = $_POST['formPitch'];

        //include Cv
        $target_dir = "CV/";
        $formCv = $target_dir.$formName.basename($_FILES["formCv"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($formCv,PATHINFO_EXTENSION));

        $target_dir = "Applicant_Photo/";
        $formPhoto = $target_dir.$formName.basename($_FILES["formPhoto"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($formPhoto,PATHINFO_EXTENSION));

        

        // Check if $uploadOk is set to 0 by an error       
        if ($uploadOk == 0) {       
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["formCv"]["tmp_name"], $formCv)) {
                echo "Your apply ". htmlspecialchars( basename( $_FILES["formCv"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your apply.";
            }
         }

         if ($uploadOk == 0) {       
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["formPhoto"]["tmp_name"], $formPhoto)) {
              echo "Your apply ". htmlspecialchars( basename( $_FILES["formPhoto"]["name"])). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your apply.";
          }
        }

         $sql = "INSERT INTO form_apply (formJob, formName, formGender, formEmail, formPhone, formAddress, formPitch, formCv, formPhoto)
         VALUES ('$formJob', '$formName', '$formGender', '$formEmail', '$formPhone', '$formAddress', '$formPitch', '$formCv', '$formPhoto')";
         
         if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }

         header('location: index.php');

         $conn->close();


         ?>