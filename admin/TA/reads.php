<?php include ("server.php")
?>

<?php

if(isset($_POST["submit"])){
    $show_id = mysqli_real_escape_string($db,$_POST["show_id"]);
    $ok=true;

    $query ="SELECT m.name,m.image,s.show_id,s.movie_id,s.dimension,s.show_time,s.language,s.cost,s.visible
    FROM shows s
    JOIN movies m
    ON m.movie_id=s.movie_id
    WHERE s.show_id=$show_id";
    $result= mysqli_query($db,$query);
    if($result==false){
        $ok=false;
    }
    else{
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
    }
    $i=0;
}

if(isset($_POST["submit2"])){
    header("location: index.php"); 
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Show</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
            <div class="container-fluid">
                <h4 class="text-dark mb-4">Search a Show</h4>
                <form class="user" method="POST" enctype="multipart/form-data" >
                                
                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Show ID" name="show_id"></div>
                                </div>


                        
                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Search</button>
                        <hr>
                </form>
                <?php
                    if(isset($_POST["submit"]) && $ok):
                ?>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Shows</p>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Movie</th>
                                        <th>Movie ID</th>
                                        <th>Show ID</th>
                                        <th>Language</th>
                                        <th>Dimension</th>
                                        <th>Time</th>
                                        <th>Cost</th>
                                        <th>Visibility</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php for($i =0 ; $i<count($data);$i++):?>
                                    <tr>
                                        <td><img class="rounded-circle mr-2" width="30" height="30" src="<?php echo "../../".$data[$i]['image'];?>"><?php echo $data[$i]['name'];?></td>
                                        <td><?php echo $data[$i]['movie_id'];?></td>
                                        <td><?php echo $data[$i]['show_id'];?></td>
                                        <td><?php echo $data[$i]['language'];?></td>
                                        <td><?php echo $data[$i]['dimension'];?></td>
                                        <td><?php echo $data[$i]['show_time'];?></td>
                                        <td><?php echo $data[$i]['cost'];?></td>
                                        <td><?php echo $data[$i]['visible'];?></td>
                                    </tr>
                                <?php endfor?>                                   
                            </table>
                        </div>
                        <div class="row">
                            <form class="user" method="POST">
                                <div align="left"> 
                                    <button class="btn btn-primary btn-block text-white btn-user"  name="submit2">Ok</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endif?>
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