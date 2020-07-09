<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php  include 'links.php'?>
<style>
body {
    background-image: url("fetch.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:100% 100%;
    font-family: Arial;
}
th,td{
  width: 10%;
  height: 5%;
  border-radius: 02px;
  padding: 8px 15px 8px 15px;
  margin: 10px 0px 15px 0px;
  box-shadow: 1px 1px 2px 1px white;
}
td,td{
  text-align: center;
  text-transform: uppercase;
  color: red;
  font-size:20px;
  text-shadow: 1px 1px red;
  font-family: Arial, Helvetica, sans-serif;
}
h1 {
  text-align: center;
  text-transform: uppercase;
  color: brown;
  font-size:30px;
  text-shadow: 1px 1px skyblue;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<body>
<center><hr>
<h1 class="bg-secondary text-black">Search Employee ID</h1><hr>
         <form action="" method="POST">
            <input type="text" name="id" placeholder="Search.."/><br>
            <input type="submit" name="search" value="Search Data">
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
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/><br>
            <input type="text" name="name" value="<?php echo $row['name']?>" /><br>
            <input type="text" name="email" value="<?php echo $row['email']?>" /><br>
            <input type="text" name="mobile" value="<?php echo $row['mobile']?>"/><br>
            <input type="text" name="jobpost" value="<?php echo $row['jobpost']?>"/><br>
            <input type="text" name="date_of_joining" value="<?php echo $row['date_of_joining']?>" /><br>
            <input type="text" name="experience" value="<?php echo $row['experience']?>"/><br>
            <input type="text" name="address" value="<?php echo $row['address']?>"/><br>
        </form>
       <?php
   }
}
?>

</center>

    <table align="center" border="10px" style="width:900px; line-height:30px;">
    <tr>
       <th colspan="8"><h1 align='center'>Employees Record</h1></th>
    <tr>
    <t>
      
      <th>NAME</th>
      <th>E-MAIL</th>
      <th>MOBILE</th>
      <th>JOB-POST</th>
      <th>DATE OF JOINING</th>
      <th>EXPERIENCE</th>
      <th>ADDRESS</th>
    </t>
    <?php
$connection = mysqli_connect("sql201.epizy.com","epiz_26104610","K3d1TrczN8M4");
$db = mysqli_select_db($connection,'epiz_26104610_gunner');


$query = "SELECT * FROM form";
   $query_run = mysqli_query($connection,$query);

while($rows=mysqli_fetch_assoc($query_run))
   {
       ?>
        
          <tr>
            
            <td><?php echo $rows['name'] ?></td>
            <td><?php echo $rows['email'] ?></td>
            <td><?php echo $rows['mobile'] ?></td>
            <td><?php echo $rows['jobpost'] ?></td>
            <td><?php echo $rows['date_of_joining'] ?></td>
            <td><?php echo $rows['experience'] ?></td>
            <td><?php echo $rows['address'] ?></td>
          </tr>
        
       <?php
   }

?>
<div class="container center-div ">
     <div class="heading text-left text-uppercase text-white 
     mb-5">     
        <a href="adminwork.php" class="btn btn-danger">Back</a></div>
   
        </table>
</body>
</html>