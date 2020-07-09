<?php
include_once '../constants.php';

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
  <link rel="stlesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <button type="button" onclick="location.href='user.php';" class="btn btn-secondary">BACK</button>
  <center>
    <h1>Search your ID</h1>
         <form action="" method="POST">
            <input type="text" class="container" name="id" placeholder="Search.."/><br>
            <input type="submit" class="container" name="search" value="Search Data">
         </form> 
         <?php
$connection = mysqli_connect("sql201.epizy.com","epiz_26104610","K3d1TrczN8M4");
$db = mysqli_select_db($connection,'epiz_26104610_gunner');

if(isset($_POST['search'])){
   $id = $_POST['id'];
   
   $query = "SELECT * FROM form where id='$id' ";
   $query_run = mysqli_query($connection,$query);

   while($row = mysqli_fetch_array($query_run))
   {
       ?>
        <form action="" method="POST">
        Name:             <input  type="text" name="name" value="<?php echo $row['name']?>" /><br>
           Email:            <input type="text" name="email" value="<?php echo $row['email']?>" /><br>
           Mobile:           <input type="text" name="mobile" value="<?php echo $row['mobile']?>"/><br>
           Jobpost:          <input type="text" name="jobpost" value="<?php echo $row['jobpost']?>"/><br>
           Date of Joining:  <input type="text" name="date_of_joining" value="<?php echo $row['date_of_joining']?>" /><br>
           Experience:       <input type="text" name="experience" value="<?php echo $row['experience']?>"/><br>
           Address:          <input type="text" name="address" value="<?php echo $row['address']?>"/><br>
           Department ID:    <input type="text" name="department_id" value="<?php echo $row['department_id']?>"/><br>
           Department:       <input type="text" name="department" value="<?php echo $row['department']?>"/><br>
        </form>
       <?php
   }
}
?>

<div class="container">
  <h1>Datebase Department</h1>  
  <form method="post">       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>MOBILE</th>
        <th>Email</th>
        <th>Address</th>
        <th>Department</th>
        
      </tr>
    </thead>
 </form>
    <?php
$connection = mysqli_connect("sql201.epizy.com","epiz_26104610","K3d1TrczN8M4");
$db = mysqli_select_db($connection,'epiz_26104610_gunner');


$query = "SELECT * FROM form WHERE department_id = 'database@444' ";
   $query_run = mysqli_query($connection,$query);

while($rows = mysqli_fetch_assoc($query_run))
   {
       ?>

    <tbody>
      <tr>
      <td><?php echo $rows['ID'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['mobile'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><?php echo $rows['address'] ?></td>
        <td><?php echo $rows['department'] ?></td>
    
      <?php
   }

?> 
    
   </tbody> 
  </table>
</div>
</body>
</html>