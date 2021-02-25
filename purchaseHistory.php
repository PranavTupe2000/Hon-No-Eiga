<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location: login.php");    
}

$user_id=$_SESSION["email"];

$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$query= "CALL purchaseHistory('$user_id');";
$result = mysqli_query($db,$query);
$data   = mysqli_fetch_all($result,MYSQLI_ASSOC);
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

    <title>Purchase History</title>
</head>

<body style="background-image: url(https://coolbackgrounds.io/images/backgrounds/index/compute-ea4c57a4.png);">
    <nav class="navbar navbar-dark " style="margin-bottom: 2% ; background-color: transparent;">
        <span class="navbar-brand mb-0 h1"><b>HON NO EIGA</b><br>Purchase History</span>
    </nav>
    <?php for($i =0 ; $i<count($data);$i++):?>
    <div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div>
                        <h5 class="card-title"><?php echo $data[$i]['name'];?></h5>
                    </div>
                    <div class="card-lead">
                        <div>
                            <h6><?php echo $data[$i]['tname']."<i>   Screen No.: ".$data[$i]['screen_no']."</i>";?></h6>
                        </div>
                        <div>
                            <h6><?php echo $data[$i]['language']."-".$data[$i]['dimension'];?></h6>
                        </div>
                        <div>
                            <p><?php echo "Time:".$data[$i]['show_time'];?></p>
                            <p><?php echo "Date:".$data[$i]['show_date'];?></p>
                        </div>
                        <div>
                            <p><?php echo "Seats:".$data[$i]['seats'];?></p>
                            <p><?php echo "Cost:".$data[$i]['total_cost'];?></p>

                        </div>
                        <div>
                            <p><?php echo "Purchase ID:".$data[$i]['purchase_id'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endfor?>
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