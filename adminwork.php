<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <?php  include 'links.php'?>
<style>
     .button {
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  h1 {
  text-align: center;
  text-transform: uppercase;
  color: black;
  font-size:30px;
  text-shadow: 1px 1px skyblue;
  font-family: Arial, Helvetica, sans-serif;
}
body {
  background-image: url("./photo/work.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:100% 100%;
}

</style>
</head>
<body>
</head>
<body>
<header>
<a href="logout.php" class="btn btn-danger">Logout</a></div>
  <center>
   <div class="container center-div shadow">
   <div class="heading text-center mb-5 text-uppercase text-white"><h1>FUNCTION FOR ADMIN</h1></div>
       <hr>
        <h1 class="bg-secondary text-black">Create A new Employee Record</h1><hr>
        <button class="button" onclick="location.href='adminmainpage.php';"><span>Click.. </span></button>
        <hr>
        <h1 class="bg-secondary text-black">Department</h1>
        <hr>
        <button class="button" onclick="location.href='department.php';"><span>Click.. </span></button><hr>
    </div>
    </div>
    </div>
  </center>
</header>
</body>
</html>