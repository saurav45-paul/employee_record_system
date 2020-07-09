<?php
session_start();
?>

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
?>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
/* Style the form icons */
.icon {
  padding: 5px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
</style>
     <title></title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <?php  include 'links.php'?>
</head>
<body>

<?php
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $email_search = "select * from registration where email='$email' ";
   $query = mysqli_query($con,$email_search);

   $email_count = mysqli_num_rows($query);

   if($email_count){
      $email_pass = mysqli_fetch_assoc($query);

      $db_pass = $email_pass['password'];

      $_SESSION['username'] = $email_pass['username'];

      $pass_decode = password_verify($password, $db_pass);
      if($pass_decode){
        echo "login successful";
        ?>
        <script>
        location.replace("adminwork.php");
        </script>
        <?php
      }else{
        ?>
    <script>
       alert ("Password Incorrect");
      </script>
      <?php
      }
      }else{
        ?>
        <script>
           alert ("Invalid Email");
          </script>
          <?php
      }
    }
?>
<a href="index.php" class="button">Home Page</a>
<a href="signup.php" class="button" style="color:white">Don't have an account? SIGN UP</a>
<header>
    <div class="container center-div shadow">
        <div class="heading text-center mb-5 text-uppercase text-white">ADMIN LOGIN PAGE</div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
            <div class ="admin-form shadow p-2">
              <form action="" method="POST">
                <div class="form-group">
                    <label>Email ID</label>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" name="email" value=""
                    class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <i class="fa fa-key icon"></i>
                    <input type="password" name="password" value=""
                    class="form-control" autocomplete="off">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                       </div>
                <input type="submit" class="btn btn-success"
                name="submit">
              </form>
            </div>
        </div>
    </div>
</header>


</body>
</html>