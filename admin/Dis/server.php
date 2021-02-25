<?php
session_start();
if(!isset($_SESSION["dis_id"])){
  header("location: ../../dislogin.php");    
}

$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$dis_id =$_SESSION["dis_id"];


if(!isset($_SESSION["dis_name"])){
  $query0 ="SELECT name FROM distributers WHERE distributer_id = '$dis_id'";
  $result0= mysqli_query($db,$query0);
  $data0 = mysqli_fetch_all($result0,MYSQLI_ASSOC) ;
  $_SESSION['dis_name'] = $data0[0]['name'];
  
}

$dis_name=$_SESSION['dis_name']; 


?>