<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
img {
  border-radius: 50%;
}
.button {
    background-color: #ddd;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 10px 10px;
    cursor: pointer;
    border-radius: 16px;
  }
  
  .button:hover {
    background-color: #f1f1f1;
  }
  div.polaroid {
  width: 30%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

* {
  box-sizing: border-box;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  
}

</style>
</head>
<body>
<center><a href="adminwork.php" class="btn btn-danger">Back</a>
<div class="row">
     <div class="polaroid">
        <div class="container">
  <img src="./photo/hr.png" alt="Avatar" style="width:200px">
  <h2><u>HR Department</u></h2>
  <button type="button" onclick="location.href='hr.php';" class="button">Info</button>
        </div>
      </div>

      <div class="polaroid">
        <div class="container">
  <img src="./photo/management.png" alt="Avatar" style="width:200px">
  <center><h2><u>Management Department</u></h2>
  <button type="button" onclick="location.href='management.php';" class="button">Info</button></center>
        </div>
      </div>

      <div class="polaroid">
        <div class="container">
  <img src="./photo/it.png" alt="Avatar" style="width:200px">
  <h2><u>IT Department</u></h2>
  <center><button type="button" onclick="location.href='it.php';" class="button">Info</button><center>
        </div>
      </div>


      <div class="polaroid">
        <div class="container">
  <img src="./photo/executive.png" alt="Avatar" style="width:200px">
  <center><h2><u>Executive Department</u></h2>
  <button type="button" onclick="location.href='executive.php';" class="button">Info</button><center>
        </div>
      </div>

      <div class="polaroid">
        <div class="container">
  <img src="./photo/data.png" alt="Avatar" style="width:200px">
  <center><h2><u>Datebase Department</u></h2>
  <button type="button" onclick="location.href='database.php';" class="button">Info</button><center>
        </div>
      </div>

      <div class="polaroid">
        <div class="container">
  <img src="./photo/business.png" alt="Avatar" style="width:200px">
  <center><h2><u>Business Department</u></h2>
  <button type="button" onclick="location.href='business.php';" class="button">Info</button><center>
        </div>
      </div>

      <div class="polaroid">
        <div class="container">
  <img src="./photo/sales.png" alt="Avatar" style="width:200px">
  <center><h2><u>Sales/Marketing Department</u></h2>
  <button type="button" onclick="location.href='sales.php';" class="button">Info</button><center>
        </div>
      </div>

      <div class="polaroid">
      <center>  <div class="container">
  <img src="./photo/legal.png" alt="Avatar" style="width:200px">
  <h2><u>Legal Department</u></h2>
  <button type="button" onclick="location.href='legal.php';" class="button">Info</button>
        </div><center>
      </div>

      <div class="polaroid">
      <center>  <div class="container">
  <img src="./photo/finance.png" alt="Avatar" style="width:200px">
  <h2><u>Finance/Accounting Department</u></h2>
  <button type="button" onclick="location.href='finance.php';" class="button">Info</button>
        </div><center>
      </div>


</div></center>
</body>
</html>