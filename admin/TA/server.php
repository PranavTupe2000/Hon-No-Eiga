<?php
session_start();
if(!isset($_SESSION["ta_id"])){
  header("location: ../../tadminlogin.php");    
}


$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");
$ta_id = $_SESSION["ta_id"];

if(!isset($_SESSION["t_id"])){
  $query0 ="SELECT theatre_id FROM theatres_admins WHERE tadmin_id = '$ta_id'";
  $result0= mysqli_query($db,$query0);
  $data0 = mysqli_fetch_all($result0,MYSQLI_ASSOC) ;
  $_SESSION['t_id'] = $data0[0]['theatre_id'];
  
}

$t_id=$_SESSION['t_id']; 

  $query0_1 ="SELECT name FROM theatres_admins WHERE tadmin_id = '$ta_id'";
  $result0_1= mysqli_query($db,$query0_1);
  $data0_1 = mysqli_fetch_all($result0_1,MYSQLI_ASSOC) ;
  $_SESSION['ta_name'] = $data0_1[0]['name'];
  


$ta_name=$_SESSION['ta_name']; 


  $query0 ="SELECT name FROM theatres WHERE theatre_id = '$t_id'";
  $result0= mysqli_query($db,$query0);
  $data0 = mysqli_fetch_all($result0,MYSQLI_ASSOC) ;
  $_SESSION['t_name'] = $data0[0]['name'];
  

$t_name=$_SESSION['t_name']; 

?>