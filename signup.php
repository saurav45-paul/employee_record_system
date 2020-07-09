<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php  include 'links.php'?> 
</head>
<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body><center>
<a href="index.php"  class="btn btn-danger">Back</a>
<?php

include_once 'constants.php';

session_start();

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

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password =  $_POST['password'];
    $cpassword =  $_POST['cpassword'];

   $pass = password_hash($password, PASSWORD_BCRYPT);
   $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

   $emailquery = "SELECT * FROM registration WHERE email='$email' ";
   $query = mysqli_query($con,$emailquery);

   $emailcount = mysqli_num_rows($query);
   if($emailcount>0){
     ?>
    <script>
       alert ("Email already exists");
      </script>
      <?php
   }else{
       if($password === $cpassword){
           $insertquery  = "insert into registration (username, email, mobile, 
           password, cpassword) VALUES ('$username','$email','$mobile','$pass','$cpass')";

           $iquery = mysqli_query($con, $insertquery);

           if($iquery){
               ?>
                 <script>
                alert("Sign up Successful go to Login Page");
                </script>
            <?php
           }else{
               ?>
               <script>
                  alert("Sign up unsuccessful retry to Signup");
            </script>
            <?php
           }
       

       }else{
         ?>
         <script>
           alert("Both password are not matching");
          </script>
          <?php
       }
   }
}

?>

<form action="" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1><u>Sign Up</u></h1>
    <p>Please fill in this form to create an account.</p>
    <h4>Have an Account?<a href="adminlogin.php" style="color:dodgerblue">LOG IN</a>.</h4>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter full name" name="username" required>

    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone number" name="mobile" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="https://www.termsandconditionsgenerator.com/live.php?token=zRLAmaImX3hR9eeMniKqBROMCh947R2o" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</center>
</body>
</html>





