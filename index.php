 <?php include('connection.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rubic | index</title>
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
     	<div class="jumbotron">
     		<h1 class="display-4">welcome to Rubic</h1>
     		<p class="lead">Hundreds of jobs posted every day</p>
     		<hr class="my-4">
     		<p>Search, Add, Update jobs through Rubic</p>
     		<p class="lead">
     			<a class="btn btn-primary btn-lg" href="register.php" role="button">Join Us Today</a>
     		</p>

              
     	</div>

          <hr class="my-4">

          <!-- card deck -->

     </div>


     <!-- footer -->
     <footer class="footer text-center">
     	<small>Created with all the love by kevo &copy;</small>
     </footer>

</body>
</html>