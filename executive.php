<?php
include_once 'constants.php';

session_start();

$username = DATABASE_USER;
$password = DATABASE_PASSWORD;
$server = SERVER;
$db = DATABASE_NAME;

$con = mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "connection is successfully";
}else{
    echo"no connecetion";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<body>
  <button type="button" onclick="location.href='department.php';" class="btn btn-secondary">BACK</button>


<div class="container">
  <h1>Executive Department</h1>         
  <table class="table table-striped">
    <thead>
      <tr>
      <th>ID</th>
        <th>Name</th>
        <th>MOBILE</th>
        <th>Email</th>
        <th>Jobpost</th>
        <th>Date of Joining</th>
        <th>Experience</th>
        <th>Address</th>
        <th>Department</th>
        <th colspan="3">Operation</th>
      </tr>
    </thead>
    <?php
$connection = mysqli_connect("sql201.epizy.com","epiz_26104610","K3d1TrczN8M4");
$db = mysqli_select_db($connection,'epiz_26104610_gunner');


$query = "SELECT * FROM form WHERE department_id = 'executive@333' ";
   $query_run = mysqli_query($connection,$query);

while($rows=mysqli_fetch_assoc($query_run))
   {
       ?>

    <tbody>
      <tr>
      <td><?php echo $rows['ID'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['mobile'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><?php echo $rows['jobpost'] ?></td>
        <td><?php echo $rows['date_of_joining'] ?></td>
        <td><?php echo $rows['experience'] ?></td>
        <td><?php echo $rows['address'] ?></td>
        <td><?php echo $rows['department'] ?></td>
        <td><button class="btn btn-success" onclick="location.href='update.php?ID=<?php echo $rows['ID'] ?>';">Update</button></td>
        <td><button class="btn-danger btn" onclick="location.href='delete.php?ID=<?php echo $rows['ID'] ?>';">Delete</button></td>
      </tr>
    
    
      <?php
   }

?> 
    
   </tbody> 
  </table>
</div>
</body>
</html>