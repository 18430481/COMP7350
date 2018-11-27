<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
</head>
<body>	
  <form method="post" action="registeration.php">
  	<?php include('error.php'); ?>
  	<div class="form-group">
  	  <label>Username: </label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Password: </label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password: </label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn" name="registeruser">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>