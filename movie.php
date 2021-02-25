<?php
//checking if logged in
session_start();
if(!isset($_SESSION["email"])){
  header("location: login.php");    
}

$movie_id = $_SESSION['movie_id'];

// connecting to database
$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$query1 ="SELECT name,genre,image,trailer FROM movies WHERE movie_id='$movie_id'";
$query2="SELECT DISTINCT dimension,language from visible_shows  WHERE movie_id='$movie_id'";
$result1 =mysqli_query($db,$query1);
$result2 =mysqli_query($db,$query2);
$result3 =mysqli_query($db,$query2);

if(mysqli_num_rows($result1)>0){
$row1 = mysqli_fetch_row($result1);
$movie_name= $row1[0];
$movie_img=$row1[2];
$movie_trailer=$row1[3];
$movie_genre=$row1[1];
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    while($row3 = mysqli_fetch_assoc($result3)){
        $button_clicked= $row3["language"]."-".$row3["dimension"];
        echo $button_clicked;
        if(array_key_exists($button_clicked, $_POST)) { 
            $_SESSION["movie_language"]=$row3['language'];
            $_SESSION["movie_dimension"]=$row3['dimension'];
            header("location: timing.php");       
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?php echo $movie_name;?></title>
  </head>
  <body style="background-image: url(https://coolbackgrounds.io/images/backgrounds/index/compute-ea4c57a4.png);">
    <nav class="navbar navbar-dark " style="margin-bottom: 2% ; background-color: transparent;">
        <span class="navbar-brand mb-0 h1"><b>HO NO EIGA</b></span>
    </nav>
    <div class="container" style="padding:1%;">
    <div class="jumbotron">
        <h2><?php echo $movie_name;?></h2>
        <h4><?php echo $movie_genre;?></h4>
        <img src="<?php echo $movie_img;?>" style="width: 183px;height: 275px;" class="rounded">
        <form method="POST" >
        <?php
          while($row2 = mysqli_fetch_assoc($result2)):
        ?>
           <div><button name="<?php echo $row2["language"]."-".$row2["dimension"];?>" class="btn btn-dark" style="margin: 1%;"><?php echo $row2["language"]."-".$row2["dimension"];?></button></div>
        <?php endwhile?>           
        </form>
        <a href="<?php echo $movie_trailer;?>"><button class="btn btn-primary" style="margin: 1%;"><i>Watch Trailer</i></button></a>
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