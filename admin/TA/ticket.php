<?php include ("server.php")
?>

<?php

if(isset($_POST["submit"])){
    $_SESSION['tc_u_id'] = mysqli_real_escape_string($db,$_POST["u_id"]);
    $_SESSION['tc_p_id'] = mysqli_real_escape_string($db,$_POST["p_id"]);

    header("location: viewX.php"); 
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ticket</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Hon No Eiga</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>All Movies</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table2.php"><i class="fas fa-table"></i><span>Shows</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link  active" href="ticket.php"><i class="far fa-user-circle"></i><span>Check Tickets</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        
            <div class="container-fluid">
                <h3 class="text-dark mb-4"><?php echo $t_name;?></h3>
                <form class="user" method="POST" enctype="multipart/form-data" >
                                
                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="User's E-mail ID" name="u_id"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Purchase ID" name="p_id"></div>
                                </div>


                        
                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Check</button>
                        <hr>
                </form>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Hon No Eiga I2IT 2020</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>