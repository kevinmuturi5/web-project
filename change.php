<?php include("connection.php"); ?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forgot Password</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>

    <div class="navbar navbar-dark bg-dark">
        <a href="homepage.php" class="navbar-brand">Rubic</a>
        
    </div>

    <br class="my-4">
    
     <div class="container">

     	<div class="card m-auto bg-light"  style="width: 40%;">
     		<div class="card-body m-auto">
     			<h5 class="card-title display-4">change Password</h5>
     			<hr class="my-4">
     			     <h6>Fill in the form to change password</h6>
     					<form action="change.php" method="POST">
     						<div class="form-group">
     							<input class="form-control" type="text" placeholder="old password" required autofocus name="oldpassword">
     						</div>
     						<div class="form-group">
     							<input type="text" class="form-control" placeholder="newpassword" required name="newpassword">
     						</div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="repeat_newpassword" required name="repeatnewpassword">
                            </div>

     						<div>
     							<input type="submit" class="btn btn-warning" name="change" value="Change password">
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

<?php 


$user = $_SESSION['user'];

if ($user) {


    if (isset($_POST['change'])) {

        //check fields

        $oldpassword = sha1($_POST['oldpassword']);
        $newpassword = sha1($_POST['newpassword']);
        $repeatnewpassword = sha1($_POST['repeatnewpassword']);


        //check password against database
        $query = mysqli_query($conn, "SELECT password FROM 6470users WHERE username = '$user'") or die("query did not pass");

        $row = mysqli_fetch_assoc($query);

        $oldpassword_db = $row['password'];

        if($oldpassword == $oldpassword_db){

            //check new passwords
            if($newpassword == $repeatnewpassword){

                //success and change password in db
                $sql = mysqli_query($conn, "
                 UPDATE 6470users SET password = '$newpassword' WHERE username = '$user'; 
                 ");
                session_destroy();
                echo "<div class='text-center'>

                <kbd>Your password has been changed</kbd> . <a href='login.php' class= 'btn btn-info'= >login</a>

                </div>"
               ;

            }else{
                die("new passwords do not match");

            }

        }else{
            die("old password doesnt match");
        }


        
    } else {

         
 }

} else {
    echo "You must be logged in to change the password";
}









 ?>