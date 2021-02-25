<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location: login.php");    
}

$tc_u_id=$_SESSION['email'];
$tc_p_id=$_SESSION['p_id'];

$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");

if(isset($_POST["submit"])){
    header("location: index.php"); 
}

$query1 ="CALL checkTicket('$tc_u_id','$tc_p_id');";
$result1= mysqli_query($db,$query1);
$data = mysqli_fetch_all($result1,MYSQLI_ASSOC) ;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tickets Booked!!!</title>
  </head>
  <body style="background-image:url(https://coolbackgrounds.io/images/backgrounds/index/compute-ea4c57a4.png)">
    <nav class="navbar navbar-dark  sticky-top" style=" background-color: transparent;">
        <span class="navbar-brand mb-0 h1"><b>HO NO EIGA</b></span>
    </nav>
    <center>
    <div class="container position-static" >
        <div class="jumbotron" style="width: 50%;height: 50%;">
            <h1 class="display-4"><b>Thank you!</b></h1>
            <p class="lead"><i></i></p>
            <hr class="my-4"> 
            <img src="<?php echo $data[0]["image"];?>" alt="avengers-endgame poster" style="width: 183px;height: 275px;" class="rounded">
            <div>
                <div><h2><?php echo $data[0]["name"];?></h2></div>
                <div><h3><?php echo $data[0]["tname"];?><i>   Screen No.: <?php echo $data[0]["screen_no"];?></i></h2></div>
                <div><h4><?php echo $data[0]["language"];?>-<?php echo $data[0]["dimension"];?></h4></div>
                <div><p>Time:<?php echo $data[0]["show_time"];?></p> <p>Date:<?php echo $data[0]["show_date"];?></p></div>
                <div><p>Seats:<?php echo $data[0]["seats"];?></p> <p>Cost:<?php echo $data[0]["total_cost"];?></p></div>
                <div><p>Purchase ID:<?php echo $data[0]["purchase_id"];?></p></div>
            </div>
            <form method="POST">
            <button class="btn btn-primary" name="submit">Ok</button>
            </form>
            
    </div>
    </div>
    </center>
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