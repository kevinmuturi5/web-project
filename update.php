<?php include("connection.php"); ?>
<?php 

session_start();

 ?>


 <?php 

     if (isset($_GET['update_id'])) {
     
     $id = $_GET['update_id'];
     $sql = mysqli_query($conn, "SELECT * FROM jobs WHERE id = '$id'");
     $row = mysqli_fetch_row($sql);
    }

    if (isset($_POST['update'])) {
     $newposition = $_POST['newposition'];
     $newcompany = $_POST['newcompany'];
     $id = $_POST['id'];
     $sql = "UPDATE jobs SET position ='$newposition', company='$newcompany' WHERE id ='$id'";
     $run = mysqli_query($conn, $sql) or die("unable to update".mysqli_error($conn));
     header("location: view.php");

    }


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit job details</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>

     <div class="navbar bg-dark navbar-dark">
          <a href="homepage.php" class="navbar-brand">Rubic</a>
          
     </div>

     <br class="my-4">

     <div class="container">

     	<div class="card m-auto bg-light"  style="width: 40%;">
     		<div class="card-body m-auto">
     			<h5 class="card-title display-4">Edit job Post</h5>
     			<hr class="my-4">
                 
     			     <h6>update job post information</h6>
     					<form action="update.php" method="POST">

                                   <div>
                                        <input type="hidden" name="id" value = "<?php echo $row[0]; ?>" >
                                   </div>
     						<div class="form-group">
     							<input class="form-control" type="text" required autofocus name="newposition" value="<?php echo $row[1]; ?>">
                                   </div>
     					
     						<div class="form-group">
     							<input type="text" class="form-control"  required name="newcompany" value="<?php echo $row[2] ;  ?>">
     						</div>

     						<div>
     							<input type="submit" class="btn btn-outline-primary" name="update" value="update details">
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