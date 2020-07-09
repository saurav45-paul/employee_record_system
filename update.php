<?php
include_once 'constants.php';

session_start();

$username = DATABASE_USER;
$password = DATABASE_PASSWORD;
$server = SERVER;
$db = DATABASE_NAME;

$con = mysqli_connect($server, $username, $password, $db);
if ($con) {
  echo "connection successful";
} else {
  echo "no connecetion";
}
?>

<?php

$id = $_GET['ID'];
$query = "SELECT * FROM form WHERE ID = '$id' ";
$query_run = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($query_run);

$id = $row['ID'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$jobpost = $row['jobpost'];
$date_of_joining = $row['date_of_joining'];
$experience = $row['experience'];
$address = $row['address'];
$department_id = $row['department_id'];
$department = $row['department'];


if (isset($_POST['done'])) {
  $id = $_GET['ID'];
  $name = $_POST['user'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $jobpost = $_POST['jobpost'];
  $date_of_joining = $_POST['date_of_joining'];
  $experience = $_POST['experience'];
  $address = $_POST['address'];
  $department_id = $_POST['department_id'];
  $department = $_POST['department'];

  $q = "UPDATE `form` SET name='$name', email='$email', mobile='$mobile', jobpost='$jobpost',
     date_of_joining='$date_of_joining', experience=$experience, address='$address', department_id='$department_id', department='$department'
       WHERE ID='$id'";
  echo $q;

  $query = mysqli_query($con, $q);
  header('location:department.php');
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>Update record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="col-lg-6 m-auto">
    <form method="POST">
      <br><br>
      <div class="card">
        <div class="card-header bg-dark">
          <h1 class="text-white text-center">Update Record</h1>
        </div><br>
        <label>Name:</label>
        <input type="text" name="user" class="form-control" value="<?php echo $name; ?>"><br>

        <label>Email ID:</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"><br>

        <label>Mobile:</label>
        <input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>"><br>

        <label>Job Post:</label>
        <input type="text" name="jobpost" class="form-control" value="<?php echo $jobpost; ?>"><br>

        <label>Date of joining</label>
        <input type="date" name="date_of_joining" class="form-control" value=<?php echo $date_of_joining; ?>><br>

        <label>Experience:</label>
        <input type="number" min=0 max=20 name="experience" class="form-control" value=<?php echo $experience; ?>><br>

        <label>Address:</label>
        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>"><br>

        <label>Department ID (Id must be same to the department) </label>
        <select type="text" name="department_id" class="form-control" value=<?php echo $department_id; ?>><br>
          <?php

          $query = "SELECT department_id FROM department";
          $query_run = mysqli_query($con, $query);

          while ($rows = mysqli_fetch_assoc($query_run)) {

            $department_id_option = $rows['department_id'];

            echo "<option  value='$department_id_option' style='background:$color;'>$department_id_option</option>";
          }
          echo "<option  selected='selected'>$department_id</option>";
          ?>
        </select>

        <label>Department </label>

        <select name="department" type="text" class="form-control" value=<?php echo $department; ?>><br><br>
          <?php

          $query = "SELECT department FROM department";
          $query_run = mysqli_query($con, $query);

          while ($rows = mysqli_fetch_assoc($query_run)) {

            $department_option = $rows['department'];

            echo "<option  value='$department_option' style='background:$color;'>$department_option</option>";
          }
          echo "<option  selected='selected'>$department</option>";
          ?>
        </select><br>

        <button class="btn btn-success" type="submit" name="done">Update</button><br>
      </div>
    </form>
  </div>
</body>

</html>