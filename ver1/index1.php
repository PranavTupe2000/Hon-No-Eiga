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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST">
            <div>
            <?php
              while($row = mysqli_fetch_assoc($result)):
            ?>
                <button name="<?php echo $row['movie_id'];?>"><div><img src="<?php echo $row['image'];?>">
                    <h5><?php echo $row['dimension'];?></h5>
                    <b><i><?php echo $row['genre'];?></i></b>
                </div></button>
            <?php endwhile?>
            </div>
            <hr>
            <button name="logout">Logout</button>
            <button name="ph">Purchase History</button>
        </form>
</body>
</html>