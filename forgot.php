<?php include("connection.php"); ?>


<?php 


 if (isset($_POST['confirm'])) {
  $user = $_POST['username'];
  $phone = $_POST['phone_number'];

  $query = "SELECT * FROM 6470users where username = '$user' AND phone = '$phone'";

  $result = mysqli_query($conn, $query);

   if ($row = mysqli_fetch_row($result)) {
     header("location:reset.php");
   } else {
       echo "<div class='text-center alert alert-danger'>Username or phone number non-existent</div>";
   }


 }

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forgot Password</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>

  <div class="navbar bg-dark navbar-dark">
          <a href="homepage.php" class="navbar-brand">Rubic</a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a href="login.php" class="btn btn-outline-primary text-white">Login</a>
        </li> 
      </ul>
     </div>

     <br class="my-4">

     <div class="container">

     	<div class="card m-auto bg-light"  style="width: 40%;">
     		<div class="card-body m-auto">
     			<h5 class="card-title display-4">forgot password?</h5>
          
     			<hr class="my-4">
                 
     			     <h6>Please Verify credentials to get password</h6>
               <!--  -->
     					<form action="forgot.php" method="POST">
     						<div class="form-group">
     							<input class="form-control" type="text" placeholder="Enter Username" required autofocus name="username">
     						</div>
     						<div class="form-group">
     							<input type="text" class="form-control" placeholder="phone_number" required name="phone_number">
     						</div>

     						<div>
     							<input type="submit" class="btn btn-danger" name="confirm" value="Show password">
     						</div>
     					</form>
     		</div>

         	
         </div> 
     	
     </div>

      <!-- footer -->
     <footer class="footer text-center">
      <small>Created with all the love by Matt &copy;</small>
     </footer>

</body>
</html>



