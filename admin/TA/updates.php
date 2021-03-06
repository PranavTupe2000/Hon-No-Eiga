<?php include ("server.php")
?>
<?php
if( isset($_POST["submit"])){
    header("location: index.php"); 
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update Show</title>
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
                                <h4 class="text-dark mb-4">Update Show!</h4>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data" >
                                <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Old Show ID" name="o_id"></div>    
                                <hr>
                                <div class="form-group" align="center"><i>Enter Updated Data:</i></div>
                                
                                <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Movie ID" name="movie_id"></div>

                            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Language" name="show_lang"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Dimensions" name="show_dimension"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="time" id="exampleFirstName" placeholder="Time" name="show_time"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="date" id="exampleFirstName" name="show_date"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="examplePasswordInput" placeholder="Screen Number" name="screen_no"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleRepeatPasswordInput" placeholder="Cost" name="show_cost"></div>
                                </div>
                                
                                
                                
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Update Show</button>
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
$_SESSION['CRUD'] = "Not successful operation";
if(isset($_POST["submit"])) {
    $show_id= mysqli_real_escape_string($db,$_POST["o_id"]);

    $errors = array();
    $query ="SELECT show_id FROM shows WHERE show_id= '$show_id'";
    $result= mysqli_query($db,$query);
    $result= mysqli_query($db,$query);
    $id_check = mysqli_fetch_assoc($result);
    if($id_check == null){
        array_push($errors,"Show Id Not Found");
    }

    if(count($errors) == 0){
        $movie_id = mysqli_real_escape_string($db,$_POST["movie_id"]);
        $show_lang = mysqli_real_escape_string($db,$_POST["show_lang"]);
        $show_dimension = mysqli_real_escape_string($db,$_POST["show_dimension"]);
        $show_date = mysqli_real_escape_string($db,$_POST["show_date"]);
        $show_time = mysqli_real_escape_string($db,$_POST["show_time"]);
        $screen_no = mysqli_real_escape_string($db,$_POST["screen_no"]);
        $show_cost= mysqli_real_escape_string($db,$_POST["show_cost"]);
    
        $queryI ="CALL updateshow($show_id,'$movie_id','$t_id','$screen_no','$show_lang','$show_dimension','$show_date','$show_time',$show_cost);";
        $ok=mysqli_query($db,$queryI);
        $_SESSION['CRUD'] = "SUCCESFULLY UPDATED SHOW!";
    }



if(count($errors)>0){
    foreach($errors as $e){
        echo "<div>".$e."</div>";
    }
}
}

?>