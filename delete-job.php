<?php

extract($_POST);
$conn=mysqli_connect('localhost','root','','recruitment');

$id   = $_GET['id'];


// sql to delete a record
$sql = "DELETE FROM joblist WHERE id='$id'";



if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


$jobName = $_GET['jobName'];
$del = "DELETE FROM forminput WHERE inputJob='$jobName'";

if ($conn->query($del) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}



header('location: post-job.php');
$conn->close();
?>
