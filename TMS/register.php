<?php
include('includes/connection.php');
if(isset($_POST['userRegistration'])){
    $query="insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('User registered successfully...');
        window.location.href='index.php';
        </script>";
    
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error...Plz try again.');
        window.location.href='register.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS | Register Page</title>
    <!--jQuery file-->
    <script src="includes/jquery.js"></script>
    <!--Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--External CSS file -->
    <link rel="stylesheet" href="css1/reset.css">
   
</head>
<body>
    <div class="row">
        <div class="col-md-6 m-auto" id="register_home_page">
            <center><h3 style="background-color:#5A8F7B; padding:5px; width:15vw;">User Registration</h3></center>
          <form action="" method="post">
            <br>

            <div class="form-group">
                <input type="text" name="name" class
                ="form-control" placeholder="Enter Name" required>
            </div>
            <br>

            <div class="form-group">
                <input type="email" name="email" class
                ="form-control" placeholder="Enter Email" required>
            </div>
            <br>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <br>

            <div class="form-group">
                <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
            </div>
            
            <br>
            <br>
            <!--<div class="form-group">-->
            <div class="form-group d-flex justify-content-between">    
                <input type="Submit" name="userRegistration" value="Register" class="btn btn-warning">
                <a href="index.php" class="btn btn-danger"> Go to Home</a>
            </div>

          </form>  
         

        </div>
        
        
    </div>
</body>
</html>