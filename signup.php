<?php include("server.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Signup Page</title>
  </head>
  <body style="background-image:url(https://coolbackgrounds.io/images/backgrounds/index/compute-ea4c57a4.png)">
      <div class="container position-static" style="padding: 2%;margin-top:3% ;">
        <div class="jumbotron">
            <h1 class="display-4"><b>Signup details</b></h1>
            <p class="lead"><i></i></p>
            <hr class="my-4"> 
    <form action="" method="POST">
        <div class="form-group row position-relative">
            <label for="username">Username:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="username" required>
            </div>
        </div>
        <div class="form-group row position-relative">
            <label for="email">E-mail:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="email" required>
            </div>
        </div>
        <div>
            <div class="form-group row position-relative">
            <label for="password_1">Password:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="password_1" required>
            </div>
        </div>
        <div>
            <div class="form-group row position-relative">
            <label for="password_2">Confirm Password:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="password_2" required>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-success" name="reg_user">Sign up</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </div>
        <div>
            Already a user <a href="login.php">Click here to login</a>
        </div>
    </form>
    </div>
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