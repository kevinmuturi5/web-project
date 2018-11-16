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
        
     			
     			<a href="login.php" class="btn btn-outline-primary text-white">Login</a>
     		</li>	
     	</ul>
     	
     </div>

     <br class="my-4">
      <!-- main content -->
     <div class="container">
     	<div>
     		<h1 class="display-4">Sign Up Today</h1>
     		<p class="lead">Rubic is a portal for job listings. Join us today to get ahead with new jobs</p>
     		<hr class="my-4">
     		
     			<!-- form -->

                    <form action="register.php" method="POST">
                       <div class="form-group">
                          <label class="sr-only">Username</label>
                          <div class="input-group mb-2">
                           <div class="input-group-prepend">
                              <div class="input-group-text">@</div>
                         </div>
                         <input type="text" class="form-control"
                          name="username" placeholder="Username" required autofocus>
                    </div>
                     </div>
                     <div class="form-group">
                          <label for="formGroupExampleInput2">Password: </label>
                          <input type="password" class="form-control" placeholder="Password" required name="password">
                          <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                       </small>
                     </div>
                     <div class="form-group">
                          <label for="formGroupExampleInput2">Phone Number:</label>
                          <input type="number" class="form-control" placeholder="072x-xxx-xxx" required name="phone">
                     </div>
                    
                     <br>
                      <small>Already have an account? <a href="login.php">Login</a></small><br>
                     <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </form>
     		
     	</div>

     </div>

     <!-- footer -->
     <footer class="footer text-center fixed-bottom">
     	<small>Created with all the love by Matt &copy;</small>
     </footer>

</body>
</html>


<?php 
if(isset($_POST['submit'])){
  extract($_POST);
  $password = sha1($_POST['password']);
  //query to insert
  $query = "INSERT INTO 6470users VALUES ('$username', '$phone', '$password');";
  // Run the query to check whether its working and inserting
  $result = mysqli_query($conn, $query);
  if($result){
    echo "<kbd class='text-center fixed-top'>Registration successful</kbd>";
     header("location:homepage.php");
  } else{
    echo "<kbd class='text-center fixed-top bg-danger'>username is already Taken</kbd>";;
  }

}
?>