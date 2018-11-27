<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="homepage.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<!-- // NEED TO ADD LOGOUT AND NAV BAR WITH OUR GROUP'S ICON -->
<br><br>
 <div>
 <span>Our Products: </span></div>    
<br><br>
    <div class="container">
        <div class="row">
          <?php
          $db = mysqli_connect('localhost', 'root', '', 'Printown');
          $result = mysqli_query($db,"SELECT Name,image,Prod_desc,cost FROM product");
        
          echo "<table border='1'>
     <tr>
<th>Product Name</th>
<th>Cost</th>
<th>Description</th>
<th>image</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><a href=productDetail.php> " . $row['Name'] . "</a></td>";
echo "<td>" . $row['cost'] . "</td>";
echo "<td>" . $row['Prod_desc'] . "</td>";
echo "<td>" . $row['image'] . "</td>";
echo "</tr>";
}
echo "</table>";  
?> 
        </div>
    </div>	
</body>
</html>
