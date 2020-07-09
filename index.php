<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>


  
  .about {
    background-image: url("./photo/about1.png");
    background-repeat: no-repeat;
    width: 100%;
    padding: 20px;
  }
  pre{
  text-align: center;
  text-transform: uppercase;
  color: black;
  weight:bold;
  font-size:10px;
  font-family: Arial, Helvetica, sans-serif;

}
.bg-image {
    /* The image used */
    background-image: url("./photo/3.jpg");
    
    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(8px);
    
    /* Full height */
    height: 40%; 
    
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  
</style>
</head>
<body>

<div class="bg-image"></div>
<div class="bg-text">
  <h2 style="font-size:250%; color:white;"><u>Employee's Record System</u></h2>
  <h1 style="font-size:30px; color:brown;"><i>Easy to Create / Easy to Life</i></h1>
</div>

<div class="topnav">

<a href="./userwork/user.php">USER</a>
<a href="signup.php"style="float:right">ADMIN</a>
<div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    About Creater...
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title"><u><i>App Description</u></i></h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <h3 style="font-size:25px; color:grey; text-shadow: 2px 2px 5px skyblue;"><u><i>Project Name: Employee Record System</u></i><br></h3><hr>
          <p style="font-size:35px; color:brown; text-shadow: 2px 2px 5px black;"><u><i>Designed by: ( Saurav Paul)</u></i></p><br><hr>
          <hr><p style="font-size:20px; color:grey; text-shadow: 2px 2px 5px skyblue;"><u><i>Created by: THE PAUL's Team</u></i><br></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

  
  
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 style="font-size:250%; color:black;"><u><i>Admin Page Lookup</i></u></h2>
      <h4>This page only for admin</h4>
      <p><u><i>Note..</i></u></p>
      <p>An Admin can do all task with Employee's record such as add,edit,delete,re-create etc.</p>
      <video width="900" height="500" controls="controls" autoplay="autoplay">
       <source src="./photo/admin.mp4" type="video/mp4"> 
    </div>


    <div class="card">
      <h2 style="font-size:250%; color:black;"><u><i>User Page Lookup</i></u></h2>
      <h4>This page for Users</h4>
      <p><u><i>Note..</i></u></p>
      <p>Users can search record or profile using some primary key.</p>
      <video width="900" height="500" controls="controls" autoplay="autoplay">
       <source src="./photo/uservideo.mp4" type="video/mp4"> 
    </div>
  </div>


  <div class="rightcolumn">
    <div class="card">
      <h2><u><i>About Me</i></u></h2>
      <div class="about" style="height:300px;"></div>
      <p>This page is create or design by <u>"SAURAV PAUL"</u></p>
    </div>
    <div class="card">
      <h3><u><i>Popular Post</i></u></h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
     <center> <h3><u><i>Follow Me</i></u></h3>
      <a href="https://www.facebook.com/saurav.paul.3781/" class="fa fa-facebook"></a>
      <a href="https://twitter.com/logina" class="fa fa-twitter"></a><br>
      <a href="https://www.google.co.in/" class="fa fa-google"></a>
      <a href="https://www.linkedin.com/in/saurav-paul-ab0b56195/" class="fa fa-linkedin"></a>
      <a href="https://www.instagram.com/the___p_a_u_l/" class="fa fa-instagram"></a></center>
    </div>
  </div>
</div>

<div class="footer">
               <h1><u>Created by : Saurav Paul</u></h1>
            <h4><u><i>Email : Saurav.paul45@gmail.com</i></u></h4>
            <a href="https://github.com/saurav45-paul">GitHub : github.com/saurav45-paul</a>
            <pre>&reg; Created and Designed by The Paul's team</pre>
            <pre>&copy; Copyright 2019-2020 The Paul's.in</pre>
</div>

</body>
</html>
