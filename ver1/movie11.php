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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $movie_name;?></h2>
    <h4><?php echo $movie_genre;?></h4>
    <img src="<?php echo $movie_img;?>">
    <form method="POST">
    <?php
        while($row2 = mysqli_fetch_assoc($result2)):
    ?>
    <div><button name="<?php echo $row2["language"]."-".$row2["dimension"];?>"><?php echo $row2["language"]."-".$row2["dimension"];?></button></div>
    <?php endwhile?>
    </form>
    <a href="<?php echo $movie_trailer;?>"><button><i>Watch Trailer</i></button></a>
</body>
</html>