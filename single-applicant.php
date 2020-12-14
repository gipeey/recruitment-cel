<?php extract($_POST);
        $conn = mysqli_connect('localhost', 'root', '', 'recruitment'); ?>

<?php 
$id     = $_GET['id'];
$sql    = "SELECT * FROM form_apply WHERE id = '$id'";
$detail = mysqli_query($conn, $sql);
$query  = mysqli_fetch_array($detail);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/single-job.css">


<!-- include font awesome css/js -->


    <title>Job Name</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>  