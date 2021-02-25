<?php
//checking if logged in
session_start();
if(!isset($_SESSION["email"])){
  header("location: login.php");    
}

$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$movie_id = $_SESSION['movie_id'];
$movie_name = $_SESSION['movie_name'];
$movie_language = $_SESSION['movie_language'];
$movie_dimension = $_SESSION['movie_dimension'];

$query1 ="SELECT show_time,show_date,show_id,theatre_id FROM visible_shows 
          WHERE movie_id='$movie_id' AND ( show_DATE!=DATE(NOW()) OR show_time>=TIME(NOW()))
          AND language='$movie_language' AND dimension = '$movie_dimension'";
$query2 ="SELECT name,location,theatre_id FROM theatres WHERE theatre_id IN
          (SELECT DISTINCT theatre_id FROM visible_shows 
          WHERE movie_id='$movie_id' AND ( show_DATE!=DATE(NOW()) OR show_time>=TIME(NOW()))
          AND language='$movie_language' AND dimension = '$movie_dimension')";
$query3 ="SELECT DISTINCT show_date FROM visible_shows 
          WHERE movie_id='$movie_id' AND ( show_DATE!=DATE(NOW()) OR show_time>=TIME(NOW()))
          AND language='$movie_language' AND dimension = '$movie_dimension'";
$result =mysqli_query($db,$query1);
$result1 =mysqli_query($db,$query1);
$result2 =mysqli_query($db,$query2);
$result3 =mysqli_query($db,$query3);
$i =0;
$j=0;
$k=0;
$dateList = mysqli_fetch_all($result3,MYSQLI_ASSOC) ;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  for($j =0 ; $j<count($dateList);$j++){
    if(array_key_exists($dateList[$j]['show_date'], $_POST)) { 
      $date=$dateList[$j]['show_date'];
      $k=1;
    }
  }
}

if($k==0){
  $date=$dateList[0]['show_date'];
}



$j=0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  while($row1 = mysqli_fetch_assoc($result)){
    if(array_key_exists($row1['show_id'], $_POST)) { 
        $_SESSION["show_id"]=$row1['show_id'];     
        header("location: seats.php");       
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

    <title>Select a Show</title>
</head>

<body style="background-image: url(https://coolbackgrounds.io/images/backgrounds/index/compute-ea4c57a4.png);">
    <nav class="navbar navbar-dark  sticky-top" style="margin-bottom: 2% ; background-color: transparent;">
        <span class="navbar-brand mb-0 h1"><b>HON NO EIGA</b></span>
    </nav>
    <div class="container" style="padding:1%;">
        <div class="jumbotron">
            <h2><?php echo $movie_name;?></h2>
            <h4><?php echo $movie_language."-".$movie_dimension;?></h4>
            <form method="POST">

            <?php 
                for($j =0 ; $j<count($dateList);$j++):
            ?>
            <button class="btn btn-primary" id="<?php echo $dateList[$j]['show_date'];?>" name="<?php echo $dateList[$j]['show_date'];?>"><?php echo $dateList[$j]['show_date'];?></button>
            <?php endfor?>
            <div>
                Date:<?php echo $date;?>
            </div>
              
                
            <?php
                $data   = mysqli_fetch_all($result1,MYSQLI_ASSOC) ;
                while($row2 = mysqli_fetch_array($result2)):
            ?>
                <div style="margin-bottom: 2%;">
                    <div><b><?php echo $row2['name'];?></b><br><a href="<?php echo $row2['location'];?>"><img src = "img/location.png" width="25px" height="25px"></a></div>

                    <?php
                    for($i =0 ; $i<count($data);$i++):
                    ?>
                    <?php 
                    if($data[$i]['theatre_id'] == $row2['theatre_id']):?>
                    <?php 
                        if($data[$i]['show_date']==$date):
                    ?>

                    
                        <button name="<?php echo $data[$i]['show_id'];?>" class="btn btn-success"><?php echo $data[$i]['show_time'];?></button>


                    <?php endif?>
                    <?php endif?>
                    <?php endfor?>
                </div>
            <?php endwhile?>

            </form>
        </div>
    </div>
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