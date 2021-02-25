<?php include ("server.php")
?>

<?php
$query ="CALL allMoviesTA('$t_id')";
$result= mysqli_query($db,$query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
$i=0;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Movies</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="table.php"><i class="fas fa-table"></i><span>All Movies</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table2.php"><i class="fas fa-table"></i><span>Shows</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ticket.php"><i class="far fa-user-circle"></i><span>Check Tickets</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        
            <div class="container-fluid">
                <h3 class="text-dark mb-4"><?php echo $t_name;?></h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">All Movies</p>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Genre</th>
                                        <th>Duration</th>
                                        <th>Dimension</th>
                                        <th>Earning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php for($i =0 ; $i<count($data);$i++):?>
                                    <tr>
                                        <td><img class="rounded-circle mr-2" width="30" height="30" src="<?php echo "../../".$data[$i]['image'];?>"><?php echo $data[$i]['name'];?></td>
                                        <td><?php echo $data[$i]['movie_id'];?></td>
                                        <td><?php echo $data[$i]['genre'];?></td>
                                        <td><?php echo $data[$i]['duration'];?></td>
                                        <td><?php echo $data[$i]['dimension'];?></td>
                                        <td><?php echo $data[$i]['earning'];?></td>
                                    </tr>
                                <?php endfor?>                                   
                                <tfoot>
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td><strong>ID</strong></td>
                                        <td><strong>Genre</strong></td>
                                        <td><strong>Duration</strong></td>
                                        <td><strong>Dimension</strong></td>
                                        <td><strong>Earning</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
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