<?php
session_start();

//init variables
$username ="";
$email ="";
$errors =array();

//connect to database
$db = mysqli_connect("localhost","root","","hon_no_eiga") or die("Could not connect");

//Register User
if(isset($_POST["reg_user"])){
    $username = mysqli_real_escape_string($db,$_POST["username"]);
    $email = mysqli_real_escape_string($db,$_POST["email"]);
    $p1 = mysqli_real_escape_string($db,$_POST["password_1"]);
    $p2 = mysqli_real_escape_string($db,$_POST["password_2"]);

    //validation
    if(empty($username)){array_push($errors,"Username is requwired");};
    if(empty($email)){array_push($errors,"E-mail is requwired");};
    if(empty($p1)){array_push($errors,"Password is requwired");};
    if($p1 != $p2){array_push($errors,"Passwords do not match");};

    //check if user exsist
    $email_check_query = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($db,$email_check_query);
    $email_check = mysqli_fetch_assoc($result);

    if($email_check){
        array_push($errors,"User's email already registered");
    }

    //Register the user in database if no errors are found
    if(count($errors)==0){
        //$p1 = md5(($p1));
        $query ="INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$username','$email','$p1')";
        $ok=mysqli_query($db,$query);
        $_SESSION["email"]=$email;
        $_SESSION["success"]="You are now logged in";
        var_dump($ok);
        header("location: index.php");    
    }                                                       

}

//login user
if(isset($_POST["login_user"])){
    $email = mysqli_real_escape_string($db,$_POST["email"]);    
    $p1 = mysqli_real_escape_string($db,$_POST["password_1"]);
    
    if(empty($email)){array_push($errors,"E-mail is requwired");};
    if(empty($p1)){array_push($errors,"Password is requwired");};

    if(count($errors)==0){
        //$p1 = md5(($p1));
        $query ="SELECT email FROM users WHERE email='$email' AND password='$p1'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)){
            $_SESSION["email"]=$email;
            $_SESSION["success"]="You are now logged in";
            header("location: index.php");    
            echo $_SESSION["success"];
        }else{
            array_push($errors,"Wrong email or password");
        }
    }

}

//login dis
if(isset($_POST["login_dis"])){
    $dis_id = mysqli_real_escape_string($db,$_POST["dis_id"]);    
    $pa = mysqli_real_escape_string($db,$_POST["password_d"]);
    
    if(empty($dis_id)){array_push($errors,"ID is requwired");};
    if(empty($pa)){array_push($errors,"Password is requwired");};

    if(count($errors)==0){
        //$p1 = md5(($p1));
        $query ="SELECT distributer_id FROM distributers WHERE distributer_id='$dis_id' AND password='$pa'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)){
            $_SESSION["dis_id"]=$dis_id;
            header("location: admin/dis/index.php");    
        }else{
            array_push($errors,"Wrong id or password");
        }
    }

}

//login Tadmin
if(isset($_POST["login_t"])){
    $t_id = mysqli_real_escape_string($db,$_POST["t_id"]);    
    $pt = mysqli_real_escape_string($db,$_POST["password_t"]);
    
    if(empty($t_id)){array_push($errors,"Id is requwired");};
    if(empty($pt)){array_push($errors,"Password is requwired");};

    if(count($errors)==0){
        //$p1 = md5(($p1));
        $query ="SELECT tadmin_id FROM theatres_admins WHERE tadmin_id='$t_id' AND password='$pt'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)){
            $_SESSION["ta_id"]=$t_id;
            header("location: admin/TA/index.php");    
        }else{
            array_push($errors,"Wrong id or password");
        }
    }

}

// Displayinf errors
if(count($errors)>0){
    foreach($errors as $e){
        echo "<div>".$e."</div>";
    }
}

?>