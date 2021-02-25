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
    <title>Dashboard - Brand</title>
</head>

<body >
    <div >
        <nav >
            <div>
                <a href="#">
                    <div ><span>Hon No Eiga</span></div>
                </a>
                <hr >
                <ul >
                    <li ><a  href="index.php"><i ></i><span>Dashboard</span></a></li>
                    <li ><a href="table.php"><i ></i><span>All Movies</span></a></li>
                    <li ><a href="table2.php"><i ></i><span>Shows</span></a></li>
                    <li ><a href="logout.php"><i ></i><span>Logout</span></a></li>
                </ul>
                <div ><button type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div >
                <div >
                    <div >
                    <h3 ><?php echo $ta_name."'s";?> Dashboard</h3>
                    </div>
                    <div >
                    <h6 ><i><?php echo $t_name;?></i> </h6>
                    </div>
                    <div class="row">
                        <div >
                            <div >
                                <div class="card-body">
                                    <div >
                                        <div >
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $monthEarnTA ;?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div >
                                <div class="card-body">
                                    <div >
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Earnings (annual)</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $yearEarnTA;?></span></div>
                                        </div>
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
            
                                        <p class="m-0" onclick="createM()">Create</p>
                                        <p class="text-white-50 small m-0">Add a show movie</p>
                                   
                                        <p class="m-0" onclick="readM()">Read</p>
                                        <p class="text-white-50 small m-0">Search show</p>
                                        
                                        <p class="m-0" onclick="updateM()">Update</p>
                                        <p class="text-white-50 small m-0">Change show info</p>
                            
                                        <p class="m-0" onclick="deleteM()">Delete</p>
                                        <p class="text-white-50 small m-0">Delet a show</p>
                                    
                                        <p class="m-0" onclick="visibleS()">Visible</p>
                                        <p class="text-white-50 small m-0">Make Show visible to audience</p>
                                    
                                        <p class="m-0" onclick="invisibleS()">Hide</p>
                                        <p class="text-white-50 small m-0">Hide a Show</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer >
            <div >
                <div class="text-center my-auto copyright"><span>Copyright © Hon No Eiga I2IT 2020</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    
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