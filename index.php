<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location: login.php");    
}
if(isset($_POST["logout"])){
  session_destroy();
  unset($_SESSION["email"]);
  header("location: login.php");    
}

if(isset($_POST["ph"])){
  header("location: purchaseHistory.php");    
}
$i=0;
$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$query ="SELECT * FROM MOVIES WHERE movie_id IN
        (SELECT DISTINCT movie_id from visible_shows);" ;
$result = mysqli_query($db,$query);
$result1 = mysqli_query($db,$query);
if($_SERVER["REQUEST_METHOD"] == "POST"){
while($row1 = mysqli_fetch_assoc($result1)){
    if(array_key_exists($row1['movie_id'], $_POST)) { 
        $_SESSION["movie_id"]=$row1['movie_id'];
        $_SESSION["movie_name"]=$row1['name'];        
        header("location: movie.php");       
    }
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hon No Eiga</title>
</head>

<body style=" background-image: url(https://coolbackgrounds.io/images/backgrounds/index/compute-ea4c57a4.png);">
    
    <nav class="navbar navbar-expand-lg navbar-dark  sticky-top " style="padding-bottom:10px ; background-color: transparent;"  >
        <span class="navbar-brand mb-0 h1">HON NO EIGA</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <span class="navbar-brand mb-0 h1">HOME</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="purchaseHistory.php">Purchases</a>
                </li>
            </ul>
           
        </div>
    </nav>

    <!--<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          
        </ol>
        <div class="carousel-inner container rounded">
          <div class="carousel-item active">
            <img src="https://i1.wp.com/www.tor.com/wp-content/uploads/2019/05/avengers-endgame-reward-tony-rest.png?w=1000&type=vertical&quality=100&ssl=1" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://static.hollywoodreporter.com/sites/default/files/2019/11/avengers-_endgame_-_publicity_still_-_h_2019_-1024x577.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.thenewsfetcher.com/wp-content/uploads/2020/02/817597-avengers-endgame.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.soda.com/wp-content/uploads/2020/04/john-wick-streaming-guide.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.thenewsfetcher.com/wp-content/uploads/2020/02/817597-avengers-endgame.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>--->
    <center>    
    <!-- <div class="card-deck container-fluid" > -->
    <form method="POST">
    <div class="card-deck container-fluid" >
        <?php
              while($row = mysqli_fetch_assoc($result)):
        ?>
        
        <div class="card border-dark mb-3" >
          <img src="<?php echo $row['image'];?>" class="card-img-top" alt="AVENGERS-ENDGAME" style="height: 325px;">
          <div class="card-body">
            <h6 class="card-title"><?php echo $row['name'];?></h6>
            <p class="card-text"><?php echo $row['dimension'];?><br><?php echo $row['genre'];?></p>
            <button class="btn btn-primary" name="<?php echo $row['movie_id'];?>">Book</button>
        </div>
        </div>
        <?php 
          $i++;
          if($i%6 == 0){
            echo '</div> <div class="card-deck container-fluid" >';
          }
        ?>
        <?php endwhile?>
    </div>
      </form>
   
<!-- <div class="card-deck container-fluid" >       
<div class="card border-dark mb-3" style="width: 18rem;">
          <img src="https://images-na.ssl-images-amazon.com/images/I/81H5XR97csL._AC_SL1500_.jpg" class="card-img-top" alt="..." style="height: 325px;">
          <div class="card-body">
            <h6 class="card-title">Johnwick</h6>
            <p class="card-text">2D<br>Action/Thriller</p>
            <a href="#" class="btn btn-primary">Book</a>
          </div>
        </div>
</div> -->
 <!--     
        <div class="card border-dark mb-3" >
          <img src="https://m.media-amazon.com/images/I/71zji3aER6L._AC_SY741_.jpg" class="card-img-top" alt="..." style="height: 325px;">
          <div class="card-body">
            <h6 class="card-title">Pirates of Carbbiean</h6>
            <p class="card-text">2D/3D<br>Action/Adventure</p>
            <a href="#" class="btn btn-primary">Book</a>
          </div>
        </div>
    
        <div class="card border-dark mb-3">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/68009152098109.5904704d05ec1.jpg" class="card-img-top" alt="..." style="height: 325px;">
            <div class="card-body">
              <h6 class="card-title">Baahubali-The Conclusion</h6>
              <p class="card-text">2D<br>Action/Adventure</p>
              <a href="#" class="btn btn-primary">Book</a>
            </div>
          </div>
          <div class="card border-dark mb-3">
            <img src="https://i.etsystatic.com/13367669/r/il/5a755b/1250992274/il_570xN.1250992274_ptk5.jpg" class="card-img-top" alt="..." style="height: 325px;">
            <div class="card-body">
              <h6 class="card-title">Thor-Ragnarock</h6>
              <p class="card-text">3D<br>Comedy/Scifi</p>
              <a href="#" class="btn btn-primary">Book</a>
            </div>
          </div> -->
    <!-- </div> -->
    </center>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
</body>

</html>