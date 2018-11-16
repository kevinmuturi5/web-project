<?php require("connection.php"); ?>

<?php session_start(); ?>


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
     		</li>	
     	</ul>
     	
     </div>

    <br class="my-4">
     <!-- content -->
        <div class="container">
     	<div class="jumbotron m-auto" style="width: 80%;">
     		<h1 class="display-4">Your job postings</h1>
     		<p class="lead">Your listings</p>
            <h6>You are logged in as <kbd><?php echo $_SESSION['user']; ?></kbd></h6>
     		<hr class="my-4">
     		
     			<!-- card-->

     			<div class="card text-center">
     				<div class="card-header">
     					<ul class="nav nav-tabs card-header-tabs">
     						<li class="nav-item">
     							<a class="nav-link" href="homepage.php">Add job</a>
     						</li>
     						<li class="nav-item">
     							<a class="nav-link active" href="view.php">view jobs</a>
     						</li>
                            <li class="nav-item">
                                <a class="nav-link" href="search.php">search jobs</a>
                            </li>
     					</ul>
     				</div>
     				<div class="card-body">
     					<!-- form to add job goes here -->
     					<table class="table table-light">
                            
                                   <thead class="thead-dark">
                                        <tr>
                                             <td><b>Id</b></td>
                                             <td><b>Position</b></td>
                                             <td><b>Company</b></td>
                                             <td><b>Edit</b></td>
                                             <td><b>Delete</b></td>
                                        </tr>
      
                                   </thead>
                                   <tbody>
                                       <?php 

                                           $query = "SELECT * FROM jobs";

                                           $result = mysqli_query($conn, $query);

                                           while ($row = mysqli_fetch_row($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[0]</td>";
                                                echo "<td>$row[1]</td>";
                                                echo "<td>$row[2]</td>";
                                                echo "<td><a href='update.php?update_id=$row[0]' class = 'btn btn-outline-warning'>Update</a></td>";
                                                echo "<td><a href='view.php?del_id=$row[0]' class='btn btn-outline-danger'>Delete</a></td>";
                                                echo "</tr>";
                                           }

                                        ?>
                                   </tbody>
                                   
                              </table>
     				</div>
     			</div>    		
     	</div>
     </div>

      <!-- footer -->
     <footer class="footer text-center">
        <small>Created with all the love by Matt &copy;</small>
     </footer>
</body>
</html>
<?php
if(isset($_GET['del_id'])){
    $query = "DELETE FROM jobs WHERE id = '$_GET[del_id]';";
    
    if (mysqli_query($conn, $query)){
        echo "<b> Delete successful</b>";
        header("location: view.php");

    }else{
        die("Delete failed " . mysqli_error($conn));
    }
}
?>
