<?php
    session_start();
    
    include('../includes/connection.php');
    if(isset($_POST['adminLogin'])){

    $query="select email,password,name from admins where email='$_POST[email]' AND password='$_POST[password]'";
    $query_run=mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
        while($row=mysqli_fetch_assoc($query_run)){
            $_SESSION['email']=$row['email'];
            $_SESSION['name']=$row['name'];

        }
        echo "<script type='text/javascript'>
        window.location.href='admin_dashboard.php';
        </script>";
    
    }
    else{
        echo "<script type='text/javascript'>
        alert('Please enter correct detail.');
        window.location.href='admin_login.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ETMS | Admin Login Page</title>
    <!--jQuery file-->
    <script src="../includes/jquery.js"></script>
    <!--Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--External CSS file -->
    <link rel="stylesheet" href="../css1/reset.css">
   
</head>
<body>
    <div class="row">
        <div class="col-md-8 m-auto" id="login_home_page">
            <center><h3 style="background-color:#5A8F7B; padding:5px; width:15vw;">Admin Login</h3></center>
            <br>
          <form action="" method="post">
            <div class="form-group">
                <input type="email" name="email" class
                ="form-control" placeholder="Enter Email" required>
            </div>
            <br>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <br>
            <!--<div class="form-group">-->
            <div class="form-group d-flex justify-content-between">    
            <input type="Submit" name="adminLogin" value="Login" class="btn btn-warning">
            <a href="../index.php" class="btn btn-danger"> Go to Home</a>   
            </div>


          </form>  
         <br>

        </div>
        
        
    </div>
</body>
</html>
