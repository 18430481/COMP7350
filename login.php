<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="nav justify-content-end navbar-light" style="background-color: black; height: 76px">
        <img src="http://localhost:1337/images/logo.png" style="position: absolute; left: 20px; margin-top: 8px; width:120px; height:60px">
        <li class="nav-item">
            <image src="http://img2.3png.com/a58716dc8997bd8d70b7a30e9541f460c4bb.png" style="margin-top:28px; width:20px; height:20px;">
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="color:white; margin-top:13px; font-size:20px">56284388</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="color:white; margin-top:13px; font-size: 20px">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active"></a>
        </li>
    </nav>
    <br><br><br><br><br><br><br>
    <div class="container">
  <form method="post" action="login.php">
  <div class=" row justify-content-center">
  <div class="col-4">
    <h2 class="text-block__lead-paragraph" style="color:rgb(55, 8, 94) ">Log in to your account</h2>
</div>
</div>
<br> <div class=" row justify-content-center">
  	<div class="form-group col-4">
  		<label>Username: </label>
  		<input type="text" name="username" placeholder="Enter your username..." >
  	</div></div>
      <br>
      <div class=" row justify-content-center">
  	<div class="form-group col-4">
  		<label>Password: </label>
  		<input type="password" name="password" placeholder="Enter your password...">
  	</div>
      </div>
      <br>
      <div class=" row justify-content-center">
  	<div class="form-group col-4">
  		<button type="submit" class="btn btn-primary" name="loginuser">Login</button>
  	</div>
      </div>
      <div class=" row justify-content-center">
  		 <a href="registeration.php">Sign up</a>
  	</div>
      <?php include('error.php'); ?>
  </form>
  </div>
</body>
</html>




        
          
                
           
         
            