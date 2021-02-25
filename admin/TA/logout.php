<?php include ("server.php")
?>
<?php
  session_destroy();
  unset($_SESSION["t_id"]);
  header("location: ../../tadminlogin.php");    
?>