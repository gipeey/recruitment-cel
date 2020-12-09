
<?php
	include 'conn.php';

		// include data
        $celName          = $_POST['celName'];
        $celPosition    = $_POST['celPosition'];
        $celEmail          = $_POST['celEmail'];
        $celPhone           = $_POST['celPhone'];
        $celAddress       = $_POST['celAddress'];
        $celGender        = $_POST['celGender'];
        $celPitch         = $_POST['celPitch'];

        //include file
        $target_dir = "cv/";
        $celCv = $target_dir.$celName.basename($_FILES["celCv"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($celCv,PATHINFO_EXTENSION));

        // Check if $uploadOk is set to 0 by an error       
        if ($uploadOk == 0) {       
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["celCv"]["tmp_name"], $celCv)) {
                echo "Your apply ". htmlspecialchars( basename( $_FILES["celCv"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your apply.";
            }
         }
        

       

		$sql = "INSERT INTO celdata (celName, celPosition, celEmail, celPhone, celAddress, celGender, celPitch, celCv) VALUES ('$celName', '$celPosition', '$celEmail', '$celPhone', '$celAddress', '$celGender', '$celPitch', '$celCv')";
		if($conn->multi_query($sql) === TRUE) {
			echo "<script>alert('Your apply has been uploaded')</script>";
		}
		else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	header('location: index.php');

    $conn->close();
?>