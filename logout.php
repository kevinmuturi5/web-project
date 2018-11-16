<?php 


 session_start();
 session_destroy();


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Logout page</title>
 	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

 </head>
 <body>
 	<div class="navbar navbar-dark bg-dark">
 		<a href="index.php" class="navbar-brand">Rubic</a>
 	</div>

 	<br class="my-4">

 	<div class="container">
 		<div class="jumbotron m-auto">
 			<h1 class="display-4 lead">You have been Logged out</h1>
 			<hr class="my-5">
 			<h3 class="lead small">Log back in to view jobs on rubic</h3>

 			<a href="login.php" class="btn btn-info m-auto">Login</a>

 		</div>
 		
 	</div>

 	<br class="my-4">

 	 <!-- footer -->
     <footer class="footer text-center">
     	<small>Created with all the love by Matt &copy;</small>
     </footer>
 </body>
 </html>