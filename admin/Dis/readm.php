<?php include ("server.php")
?>
<?php
$go = false;
$errors = array();

if(isset($_POST["submit"])) {
    $movie_id = mysqli_real_escape_string($db,$_POST["movie_id"]);

    
    $query ="SELECT movie_id FROM movies WHERE movie_id = '$movie_id' AND distributer_id = '$dis_id'";
    $result= mysqli_query($db,$query);
    $id_check = mysqli_fetch_assoc($result);
    if($id_check == null){
        array_push($errors,"Movie Id Not Found");
    }


if(count($errors) == 0){
    $_SESSION["veiw_movie_id"]=$movie_id;
}


if(count($errors)>0){
    foreach($errors as $e){
        echo '<div bgcolor="white" >'.$e.'</div>';
    }
}
}

if(isset($_POST["submit"]) ){
    if(count($errors) == 0){
        header("location: viewX.php"); 
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Movie Details</title>
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
                                <h4 class="text-dark mb-4">View Movie Details</h4>
                            </div>
                            <form class="user" method="POST"  >

                            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Movie ID" name="movie_id"></div>
                                </div>


                                
                                
                                
                                
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">View </button>
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


?>