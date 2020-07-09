<?php

include_once 'constants.php';

session_start();

$username = DATABASE_USER;
$password = DATABASE_PASSWORD;
$server = SERVER;
$db = DATABASE_NAME;

$con = mysqli_connect($server,$username,$password,$db);
if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

$db = mysqli_select_db($con, 'epiz_26104610_gunner');

if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from admintable where user = '$username' and
          pass = '$password' ";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1){
            echo"Login Successful";
            $_SESSION['user'] = $username;
            header('location:adminwork.php');
        }else{
            echo "Login Failed";
            header('location:adminlogin.php');
        }
    
}



?>