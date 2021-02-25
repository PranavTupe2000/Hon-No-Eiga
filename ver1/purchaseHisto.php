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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Purchase History</h1><hr>
    <?php
        for($i =0 ; $i<count($data);$i++):
    ?>
        <div>
            <div><h2><?php echo $data[$i]['name'];?></h2></div>
            <div><h3><?php echo $data[$i]['tname']."<i>   Screen No.: ".$data[$i]['screen_no']."</i>";?></h2></div>
            <div><h4><?php echo $data[$i]['language']."-".$data[$i]['dimension'];?></h4></div>
            <div><p><?php echo "Time:".$data[$i]['show_time'];?></p> <p><?php echo "Date:".$data[$i]['show_date'];?></p></div>
            <div><p><?php echo "Seats:".$data[$i]['seats'];?></p> <p><?php echo "Cost:".$data[$i]['total_cost'];?></p></div>
            <div><h4><?php echo "Purchase ID:".$data[$i]['purchase_id'];?></h4></div>
            <hr>
        </div>
    <?php endfor;?>
        
</body>
</html>


