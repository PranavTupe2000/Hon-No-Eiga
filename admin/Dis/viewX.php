<?php include ("server.php")
?>
<?php
if(!isset($_SESSION["veiw_movie_id"])){
    header("location: readm.php"); 
}

if(isset($_POST["submit"])){
    header("location: index.php"); 
}

$veiw_movie_id = $_SESSION["veiw_movie_id"];

$query1 ="CALL findmovie('$veiw_movie_id');";
$result1= mysqli_query($db,$query1);
$data = mysqli_fetch_all($result1,MYSQLI_ASSOC) ;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $data[0]["name"];?></title>
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
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;<?php echo '../../'.$data[0]['image'];?>&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h2 class="text-dark mb-4"><?php echo $data[0]["name"];?></h2>
                            </div>
                            <form class="user" method="POST"  >
                                <div class="form-group"><hr></div>

                            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><h3><?php echo $data[0]["movie_id"];?></h3></div>
                                    <div class="col-sm-6 mb-3 mb-sm-0"><h3><?php echo $data[0]["dimension"];?></h3></div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><h3><?php echo $data[0]["genre"];?></h3></div>
                                    <div class="col-sm-6 mb-3 mb-sm-0"><h3><?php echo $data[0]["duration"];?></h3></div>
                                </div>

                                <div class="form-group"><h3><h3><?php echo $data[0]["trailer"];?></h3></div>
                                
                                <div>
                                <iframe width="560" height="315" src="<?php echo $data[0]["trailer"];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Ok</button>
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
