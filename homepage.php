<?php require("connection.php"); ?>

<?php session_start(); ?>

<?php 
 
      if (isset($_POST['add'])) {
        extract($_POST);

        $query = "INSERT INTO jobs VALUES(null, '$position', '$company')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $user = $_SESSION['user'];
            if($user){
               header("location:view.php"); 
           } else {
              die("You must be logged in");
           }
            header("location:view.php");
        } else {
             die(mysqli_error($conn));
        }


      }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>
	<!-- navbar -->
	<div class="navbar bg-dark navbar-dark">
     	<a href="homepage.php" class="navbar-brand">Rubic</a>

     	<ul class="nav justify-content-end">
     		<li class="nav-item">
     			
                <a href="logout.php" class="btn btn-outline-primary text-white">Logout</a>
     			<a href="change.php" class="btn btn-outline-primary text-white">Change Password</a>               
     		</li>	
     	</ul>
     	
     </div>

     <br class="my-4">

     <!-- content -->
        <div class="container">
     	<div class="jumbotron m-auto" style="width: 80%;">
     		<h1 class="display-4">welcome to Rubic</h1>
     		<p class="lead">We are glad you're back! Add | Delete | update and View job listings at your convenience</p>
            <h6>You are logged in as <kbd><?php echo $_SESSION['user']; ?></kbd></h6>
     		<hr class="my-4">
     		
     			<!-- card-->

     			<div class="card text-center">
     				<div class="card-header">
     					<ul class="nav nav-tabs card-header-tabs">
     						<li class="nav-item">
     							<a class="nav-link active" href="homepage.php">Add job</a>
     						</li>
     						<li class="nav-item">
     							<a class="nav-link" href="view.php">view jobs</a>
     						</li>
                            <li class="nav-item">
                                <a class="nav-link" href="search.php">search jobs</a>
                            </li>
     					</ul>
     				</div>
     				<div class="card-body">
     					<!-- form to add job goes here -->
     					<form action="homepage.php" method="POST">
     						<div class="form-group">
     							<input type="text" class="form-control"  placeholder="Position available" name="position" required>
     							<small class="form-text text-muted">Please write a descriptive job title.</small>
     						</div>
     						<div class="form-group">
     							<input type="text" class="form-control" placeholder="Company_name" name="company" required>
     						</div>
     						
     						<button type="submit" class="btn btn-primary" name="add">Post Job</button>
     					</form>
     				</div>
     			</div>

                    
     		
     	</div>

     </div>

     <hr class="my-4">

      <!-- footer -->
     <footer class="footer text-center">
        <small>Created with all the love by Matt &copy;</small>
     </footer>


</body>
</html>

