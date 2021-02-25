<?php include ("server.php")?>
<?php
if(!isset($_SESSION["month_earnTA"])){
    $query0 ="CALL monthETA('$t_id');";
    $result0= mysqli_query($db,$query0);
    $data0 = mysqli_fetch_all($result0,MYSQLI_ASSOC) ;
    $_SESSION['month_earnTA'] = $data0[0]['earning'];
  }
  
  $monthEarnTA =$_SESSION['month_earnTA'];
  
  if(!isset($_SESSION["year_earnTA"])){
    $query0 ="CALL yearETA('$t_id');";
    $result0= mysqli_query($db,$query0);
    $data0 = mysqli_fetch_all($result0,MYSQLI_ASSOC) ;
    $_SESSION['year_earnTA'] = $data0[0]['earning'];
  }
  
  $yearEarnTA=$_SESSION['year_earnTA'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>All Movies</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table2.php"><i class="fas fa-table"></i><span>Shows</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ticket.php"><i class="far fa-user-circle"></i><span>Check Tickets</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0"><?php echo $ta_name."'s";?> Dashboard</h3>
                    </div>
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h6 class="text-dark mb-0"><i><?php echo $t_name;?></i> </h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $monthEarnTA ;?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Earnings (annual)</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $yearEarnTA;?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rupee-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    <?php
                        if(isset($_SESSION['CRUD'])){
                            echo "<i>".$_SESSION['CRUD']."</i>";
                        }
                    ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                            role="menu">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                            role="menu">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Social&quot;,&quot;Direct&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                                    <div
                                        class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;Social</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;Direct</span><span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;Refferal</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-6 mb-4" onclick="createM()">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Create</p>
                                        <p class="text-white-50 small m-0">Add a show movie</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4" onclick="readM()">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <p class="m-0">Read</p>
                                        <p class="text-white-50 small m-0">Search show</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4" onclick="updateM()">
                                <div class="card text-white bg-info shadow">
                                    <div class="card-body">
                                        <p class="m-0">Update</p>
                                        <p class="text-white-50 small m-0">Change show info</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4" onclick="deleteM()">
                                <div class="card text-white bg-warning shadow">
                                    <div class="card-body">
                                        <p class="m-0">Delete</p>
                                        <p class="text-white-50 small m-0">Delet a show</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4" onclick="visibleS()">
                                <div class="card text-white bg-danger shadow">
                                    <div class="card-body">
                                        <p class="m-0">Visible</p>
                                        <p class="text-white-50 small m-0">Make Show visible to audience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4" onclick="invisibleS()">
                                <div class="card text-white bg-secondary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Hide</p>
                                        <p class="text-white-50 small m-0">Hide a Show</p>
                                    </div>
                                </div>
                            </div>
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
    <script type="text/javascript">
        function createM(){
            window.location.href ="creates.php";
        }
        function readM(){
            window.location.href ="reads.php";
        }
        function updateM(){
            window.location.href ="updates.php";
        }
        function deleteM(){
            window.location.href ="deletes.php";
        }
        function visibleS(){
            window.location.href ="visibles.php";
        }
        function invisibleS(){
            window.location.href ="invisibles.php";
        }
    </script>
</body>

</html>