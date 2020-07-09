<?php

include_once 'constants.php';

$username = DATABASE_USER;
$password = DATABASE_PASSWORD;
$server = SERVER;
$db = DATABASE_NAME;

$con = mysqli_connect($server,$username,$password,$db);
if($con){
    //echo"connection successful";
}else{
    echo"no connection";
}


$ID = $_GET['ID'];

$q  = "DELETE FROM form WHERE ID='$ID'";
$query = mysqli_query($con,$q);
header('location:department.php');
if($query){
    ?>
    <script>
    alert("Data delete Properly");
    </script>
    <?php
    
}else{
 ?>
 <script>
 alert("Data not delete Properly");
 </script>
 <?php
}
?>
