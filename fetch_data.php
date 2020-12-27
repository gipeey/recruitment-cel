<?php

//fetch_data.php

include('db-conn.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM joblist WHERE jobStatus = '1'
	";

	if(isset($_POST["location"]))
	{
		$location_filter = implode("','", $_POST["location"]);
		$query .= "
		 AND jobLocation IN('".$location_filter."')
		";
	}
	if(isset($_POST["experience"]))
	{
		$experience_filter = implode("','", $_POST["experience"]);
		$query .= "
		 AND jobExp IN('".$experience_filter."')
		";
	}
	if(isset($_POST["nature"]))
	{
		$nature_filter = implode("','", $_POST["nature"]);
		$query .= "
		 AND jobNature IN('".$nature_filter."')
		";
	}

	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="row">
			<div class="col-sm col-sm-2">
              <img src="'. $row['jobImg'] .'" alt="jobimage" class="col-sm">
          </div>

          <div class="col-sm col-lg-7 col-sm-6">
              <a href="single-job.php?id='. $row['id'] .'" class="title"> <h3>'. $row['jobName'] .'</h3> </a>
              <div class="desc text-muted">
                <span class="location"><i class="fas fa-map-marker-alt mr-2"></i>'. $row['jobLocation'] .'</span>
                <span><i class="fas fa-business-time mr-2"></i>'. $row['jobExp'] .'</span>
                <span><i class="fas fa-hand-holding-usd mr-2"></i>Rp '. $row['jobSalary'] .'</span>
              </div>
          </div>

          <div class="col-sm col-lg-3 col-sm-4 text-center">
            <a href="single-job.php?id='. $row['id'] .'" class="btn btn-primary">Apply Now</a>
            <div class="date text-muted">
              <span><i class="far fa-clock mr-2"></i>Published On: '. $row['jobDate'] .'</span>
            </div>
		  </div>
		  </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>