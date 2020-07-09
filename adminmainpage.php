<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:adminlogin.php');}
?>
<?php
$username = "epiz_26104610";
$password = "K3d1TrczN8M4";
$server = 'sql201.epizy.com';
 $db = 'epiz_26104610_gunner';

 $con = mysqli_connect($server,$username,$password,$db);
 if($con){
     //echo"Connection Successful";
     ?>
     <script>
     alert('Connection Successful');
     </script>
     <?php
 }else{
     echo "No Connection";
 }
 ?>



<!DOCTYPE html>
<html>
<head>
   <title>Emplyoee register</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php  include 'links.php'?>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $id = ($_POST['id']);
    $name = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $jobpost = $_POST['jobpost'];
    $date_of_joining = $_POST['date_of_joining'];
    $experience = $_POST['experience'];
    $address = ($_POST['address']);


   $idquery = "SELECT * FROM form WHERE id='$id' ";
   $query = mysqli_query($con,$idquery);

   $idcount = mysqli_num_rows($query);
   if($idcount>0){
     ?>
    <script>
       alert ("This ID already exists");
      </script>
      <?php
   }else{
         
         //echo 'enter success';
          
       }
   
}
?>
<a href="adminwork.php" class="btn btn-danger">Back</a>
    <div>
        <?php
        if(isset($_POST['submit'])){
            //echo 'user submitted.';
        }
        ?>
<div>
    <form action="adminmainpage.php" method="post">
    
        <div class="container center-div ">
     <div class="heading text-center text-uppercase text-white 
     mb-5">
     <p>Fill up the form with correct value.</p>
      </div>
      <div class="container center-div ">
     <div class="heading text-left text-uppercase text-white 
     mb-5">     
        <a href="logout.php" class="btn btn-danger">Logout</a></div>
        
               <div class="form-group">
                <hr><hr>

                    <label>ID (Id must be remember)</label>
                    <input type="text" name="id" value=""
                    class="form-control" autocomplete="off">

                    <label>Name</label>
                    <input type="text" name="user" value=""
                    class="form-control" autocomplete="off">
                
                    <label>Email ID</label>
                    <input type="email" name="email" value=""
                    class="form-control" autocomplete="off">

                    <label>Mobile</label>
                    <input type="text" name="mobile" value=""
                    class="form-control" autocomplete="off">

                    <label>Job Post</label>
                    <input type="text" name="jobpost" value=""
                    class="form-control" autocomplete="off">

                    <label>Date of joining</label>
                    <input type="date" name="date_of_joining" value=""
                    class="form-control" autocomplete="off">

                    <label>Experience</label>
                    <input type="number" min=0 max=15 name="experience" value=""
                    class="form-control" autocomplete="off">

                    <label>Address</label>
                    <input type="text" name="address" value=""
                    class="form-control" autocomplete="off">
                    <?php

$mysqli = NEW MySQLi('sql201.epizy.com','epiz_26104610','K3d1TrczN8M4','epiz_26104610_gunner');

 $resultSet = $mysqli->query("SELECT department_id FROM department");
 $color1 = "grey";
  $color2 = "white";
  $color = $color1;
 ?>

                    <label>Department ID (Id must be same to the department) </label>
                    <select type="text" name="department_id" value=""
                    class="form-control" autocomplete="off">
                    <?php
              while($rows = $resultSet->fetch_assoc())
                  {
                $color == $color1 ? $color = $color2 : $color = $color1;

               $department_id = $rows['department_id'];
               
             echo "<option  value='$department_id' style='background:$color;'>$department_id</option>";
                         }
                           ?>
                                 </select>
                    
                    <?php

                 $mysqli = NEW MySQLi('sql201.epizy.com','epiz_26104610','K3d1TrczN8M4','epiz_26104610_gunner');

                  $resultSet = $mysqli->query("SELECT department FROM department");
                  $color1 = "grey";
                   $color2 = "white";
                   $color = $color1;
                  ?>
                <label>Department</label>
                
             <select name="department"
                     type="text"  value=""
                    class="form-control" autocomplete="off">>
                  <?php
              while($rows = $resultSet->fetch_assoc())
                  {
                $color == $color1 ? $color = $color2 : $color = $color1;

               $department = $rows['department'];
               
             echo "<option  value='$department' style='background:$color;'>$department</option>";
                         }
                           ?>
                                 </select>
   
                </div>
                <input type="submit" class="btn btn-success" name="submit">
                
</div>

</div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $jobpost = $_POST['jobpost'];
    $date_of_joining = $_POST['date_of_joining'];
    $experience = $_POST['experience'];
    $address = $_POST['address'];
    $department_id = $_POST['department_id'];
    $department = $_POST['department'];

    $insertquery = "insert into  form (id,name,email,mobile,jobpost,date_of_joining,experience,address,department_id,department)
       values('$id','$name','$email','$mobile','$jobpost','$date_of_joining','$experience','$address','$department_id','$department') ";
    
   $res =  mysqli_query($con,$insertquery);

   if($res){
       ?>
       <script>
       alert("Data Insert Properly");
       </script>
       <?php
   }else{
    ?>
    <script>
    alert("Data not Insert Properly");
    </script>
    <?php
   }
}

?>
