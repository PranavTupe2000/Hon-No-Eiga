<?php include ("server.php")
?>
<?php
 session_destroy();
 unset($_SESSION["dis_id"]);
 header("location: ../../dislogin.php"); 
?>