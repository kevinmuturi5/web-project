<?php include('connection.php'); ?>

<?php 

 session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rubic | register</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>
     
     <!-- navbar -->
     <div class="navbar bg-dark navbar-dark">
     	<a href="index.php" class="navbar-brand">Rubic</a>

     	<ul class="nav justify-content-end">
     		<li class="nav-item">
     			<a href="register.php" class="btn btn-outline-primary text-white">Sign Up</a>
     		</li>	
     	</ul>
     	
     </div>

     <br class="my-4">
      <!-- main content -->
     <div class="container">
     	<div>
     		<h1 class="display-4">Login to Rubic</h1>
     		<p class="lead">Login to view your dashboard</p>
     		<hr class="my-4">
     		
     			<!-- form -->

     		
     	</div>


      <div>
        
                    <form method="POST" action="login.php">
                       <div class="form-group">
                          <label class="sr-only">Username</label>
                          <div class="input-group mb-2">
                           <div class="input-group-prepend">
                              <div class="input-group-text">@</div>
                         </div>
                         <input type="text" class="form-control" placeholder="username" required autofocus name="username">
                    </div>
                     </div>
                     <div class="form-group">
                          <label for="formGroupExampleInput2">Password: </label>
                          <input type="text" class="form-control" placeholder="password" name="password" required>
                          <small id="passwordHelpBlock" class="form-text text-muted">
                            your password has been encrypted to make it more secure
                       </small>
                     </div>
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" name="remember">
                          <label class="form-check-label">Remember me</label>
                     </div>
                     
                     <div>
                          <a href="forgot.php" class="small">Forgot password?</a>
                     </div>

                     <br>
                     <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
      </div>

     </div>

     <!-- footer -->
     <footer class="footer text-center">
     	<small>Created with all the love by Matt &copy;</small>
     </footer>

</body>
</html>


<?php 

 if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $converted_password = sha1($pass);

  $query = "SELECT * FROM 6470users";

  $result = mysqli_query($conn, $query);
 
 if($row = mysqli_fetch_row($result)) {
    if ($user == $row[1] && $converted_password == $row[3] ) {
         if (isset($_POST['remember'])) {
          $_COOKIE['username'] = $user;
          setcookie('username', $user, time() + 60);
         }
          $_SESSION['user'] = $user;
          header("location:homepage.php");
    }else{
      echo "<div class='text-center'><kbd class='fixed-top bg-danger'>username and password does not exist</kbd></div>";    
     
    }
  }

 }

 ?>