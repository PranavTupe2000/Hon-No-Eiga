<?php include ("server.php")
?>
<?php
if($_SESSION['CRUD'] = "SUCCESFULLY CREATED NEW MOVIE!" && isset($_POST["submit"])){
    header("location: index.php"); 
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Movie</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Movie!</h4>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data" >
                                <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Movie Name" name="movie_name"></div>

                            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Movie ID" name="movie_id"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Dimensions Available" name="movie_dimension"></div>
                                </div>


                                <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Trailer Link" name="movie_trailer"></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="examplePasswordInput" placeholder="Genre" name="movie_genre"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleRepeatPasswordInput" placeholder="Duration" name="movie_duration"></div>
                                </div>
                                <div><i>Poster:</i></div>
                                <div class="form-group"><input  class="btn btn-primary btn-block text-white btn-user" name="fileToUpload" id="fileToUpload" aria-describedby="emailHelp" type="file"></div>

                                
                                
                                
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Create Movie</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

<?php
$_SESSION['CRUD'] = "Not successful operator";
if(isset($_POST["submit"])) {
    $movie_id = mysqli_real_escape_string($db,$_POST["movie_id"]);

    $errors = array();
    $query ="SELECT movie_id FROM movies WHERE movie_id = '$movie_id'";
    $result= mysqli_query($db,$query);
    $result= mysqli_query($db,$query);
    $id_check = mysqli_fetch_assoc($result);
    if($id_check){
        array_push($errors,"Movie Id already registered");
    }




if(count($errors) == 0){
if(isset($_POST["submit"])) {
$target_dir = "../../posters/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    array_push($errors,"File is not an image.");
    $uploadOk = 0;
  }
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  array_push($errors,"Sorry, your file is too large.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    array_push($errors,"Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors,"Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    array_push($errors,"Sorry, there was an error uploading your file.");
  }
  //echo "poster/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
}
}
}

if(count($errors) == 0){
    $movie_name = mysqli_real_escape_string($db,$_POST["movie_name"]);
    $movie_dimension = mysqli_real_escape_string($db,$_POST["movie_dimension"]);
    $movie_trailer = mysqli_real_escape_string($db,$_POST["movie_trailer"]);
    $movie_genre = mysqli_real_escape_string($db,$_POST["movie_genre"]);
    $movie_duration = mysqli_real_escape_string($db,$_POST["movie_duration"]);
    $movie_image= "posters/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

    $queryI ="CALL newmovie('$movie_id','$dis_id','$movie_name','$movie_genre','$movie_duration','$movie_dimension','$movie_trailer','$movie_image');";
    $ok=mysqli_query($db,$queryI);
    $_SESSION['CRUD'] = "SUCCESFULLY CREATED NEW MOVIE!";
}


if(count($errors)>0){
    foreach($errors as $e){
        echo "<div>".$e."</div>";
    }
}
}

?>