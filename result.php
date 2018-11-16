<?php require("connection.php"); ?>

<?php session_start(); ?>


<?php


if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];

    $query = "SELECT position, company FROM jobs WHERE position LIKE '%{$keyword}%' OR company LIKE '%{$keyword}%'";

    $results = mysqli_query($conn, $query);


    if($row = mysqli_fetch_assoc($results)){
               
        }  else {
       

        echo '
           <kbd class = "bg-danger text-center"> No results Found! </kbd>
        ';
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
        <a href="index.php" class="navbar-brand">Rubic</a>

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
            <h1 class="display-4">Results from search</h1>
            <hr class="my-4"> 
            <p>Displaying search results for <kbd><?php echo $keyword ?></kbd></p>  

                     
        </div>

        <br class="my-4">

        <div class="card text-center m-auto my-4" style="width: 80%; padding: 20px 20px">
                   <?php echo "<a href='view.php'>$row[position] at $row[company] </a>"; ?>
                </div> 

        
     </div>

     <br class="my-4">

      <!-- footer -->
     <footer class="footer text-center">
        <small>Created with all the love by Matt &copy;</small>
     </footer>
</body>
</html>


