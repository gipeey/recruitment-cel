<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>CHANDRA EKAJAYA LOGISTIK : RECRUITMENT</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  </head>
  <body>

  <!-- heading section -->

  <div class="container-sm title">
      <h2>Chandra Ekajaya Logistik</h2>
      <h1>Recruitment</h1>
      <a href="#" class="btn btn-primary">Back to Homepage</a>
  </div>

  <!-- form section -->

  <div class="container-sm form-section">

    <div class="formTitle">
      <h1>FILL JOB APPLICATION BELOW</h1>
    </div>

    <form action="add_action.php" method="post" enctype="multipart/form-data">

      <div class="form-row">

        <div class="form-group col-sm-6">
          <label for="celName">Full Name</label>
          <input type="text" name="celName" id="celName" class="form-control" placeholder="input your name here...">
        </div>

        <div class="form-group col-sm-6">
          <label for="celPosition">Choose your position</label>
          <select name="celPosition" id="celPosition" class="form-control">
            <option value="Null">- Choose position -</option>
            <option value="Manager">Manager</option>
            <option value="Admin">Admin</option>
            <option value="CTO">CTO</option>
            <option value="Designer">Designer</option>
          </select>
        </div>

      </div>

      <div class="form-row">

        <div class="form-group col-sm-6">
          <label for="celEmail">Email</label>
          <input type="email" name="celEmail" id="celEmail" class="form-control" placeholder="example@mail.com">
        </div>

        <div class="form-group col-sm-6">
          <label for="celPhone">Phone Number</label>
          <input type="text" name="celPhone" id="celPhone" class="form-control" placeholder="62812345678">
        </div>

      </div>

      <div class="form-group">
        <label for="celAddress">Address</label>
        <textarea name="celAddress" id="celAddress" class="form-control" cols="12" rows="3"></textarea>
      </div>

      <div class="form-row">

        <div class="form-group col-sm-6">
          <label for="celCv">Upload your CV</label>
          <input type="file" name="celCv" id="celCv" class="form-control-file">
        </div>

        <div class="form-group col-sm-6">
          <label for="celGender">Gender</label>
          <div class="form-inline">

            <div class="form-check">
              <input type="radio" name="celGender" id="male" class="form-check-input" value="male">
              <label class="form-check-label mr-3 gender" for="male">Male</label>
            </div>

            <div class="form-check">
              <input type="radio" name="celGender" id="female" class="form-check-input" value="female">
              <label for="female" class="form-check-label gender">Female</label>
            </div>

          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="celPitch">Make your Pitch! (recommended)</label>
        <textarea name="celPitch" id="celPitch" class="form-control" cols="12" rows="3"></textarea>
        <small id="celPitchHelp" class="form-text text-muted">max 300 characters</small>
      </div>

      <button type="submit" class="btn btn-primary btnSubmit">Submit!</button>
    </form>
  </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>