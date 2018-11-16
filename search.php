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
            <h1 class="display-4">Search Rubic for listings</h1>
            <p class="lead">Search for job listings in your dashboard</p>
            <h6>You are logged in as <kbd><?php echo $_SESSION['user']; ?></kbd></h6>
            <hr class="my-4">    

            <br class="my-4">
             <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="homepage.php">Add job</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view.php">view jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="search.php">search jobs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- form to search job goes here -->
                        <form action="result.php" method="POSt">
                            <div class="form-group">
                                <input type="search" class="form-control" name="keyword" required autocomplete="off" autofocus placeholder="Enter keyword">  
                            </div>
                            <div>
                                <button class="btn btn-outline-info" name="search">Search</button>
                            </div>
                          
                        </form>           
                            
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
