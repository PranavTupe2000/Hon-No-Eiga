<?php  
require 'vendor/autoload.php';  

session_start();
if(!isset($_SESSION["email"])){
    header("location: login.php");    
  }
echo '<!DOCTYPE html>
<html>
<script src="js/jquery-3.5.1.min.js"></script>';
// Creating Connection  
$con = new MongoDB\Client("mongodb://localhost:27017");  
// Creating Database  
$db = $con->hon_no_eiga;  
// Creating Document  
$seats = $db->seats;  

// Booked Logic
$show_id =$_SESSION["show_id"];
$booked = array();
$record=$seats->find(['show_id' =>$show_id]);
foreach($record as $exc){
    foreach($exc['booked'] as $dis){
        array_push($booked,$dis);
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
   header("location: thankyou.php");
}

$user_id = $_SESSION["email"];
$show_id=$_SESSION["show_id"];
$movie_name = $_SESSION['movie_name'];
$movie_language = $_SESSION['movie_language'];
$movie_dimension = $_SESSION['movie_dimension'];

$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$query1 ="SELECT cost FROM visible_shows 
          WHERE show_id='$show_id';";
$result1 =mysqli_query($db,$query1);
$data   = mysqli_fetch_all($result1,MYSQLI_ASSOC); 
$movie_cost =$data[0]['cost'] ;


?>

