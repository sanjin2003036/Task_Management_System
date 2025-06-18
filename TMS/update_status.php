<?php
    include('includes/connection.php');
    if(isset($_POST['update'])){
        $query="update tasks set status='$_POST[status]' where tid=$_GET[id]";

        $query_run=mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
        alert('Status update successfully...');
        window.location.href='user_dashboard.php';
        </script>";

        }
        else{
            echo "<script type='text/javascript'>
        alert('Error...Plz try again.');
        window.location.href='user_dashboard.php';
        </script>";

        }
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update status</title>
    <!--jQuery file-->
    <script src="includes/jquery.js"></script>
    <!--Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--External CSS file -->
    <link rel="stylesheet" href="css1/reset.css">
</head>
<body>

    <!--Header code starts here-->
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fa fa-solid fa-list" style="padding-right:15px;"></i>Task Management System</h3>
        </div>
    </div>

        <div class="row1">
            <div class="col-md-4 m-auto" style="color:white;"><br>
             <h3 style="color:white;">Update the task</h3><br>
             <?php
                 $query="select * from tasks where tid=$_GET[id]";
                 $query_run=mysqli_query($connection,$query);
                 while($row=mysqli_fetch_assoc($query_run)){
                  ?>

             <form action="" method="post">
             <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="" required>
             <!--
            </div>
            <div class="form-group>
                 -->
                 <select class="form-control" name="status">
                    <option>-select-</option>
                    <option>In-Process</option>
                    <option>Complete</option>

                 </select>  

                </div>
                <br>
                <input type="submit" class="btn btn-warning" name="update" value="update">
            </form>
            <?php
                }
             ?>
            </div>
        </div>
    
    
</body>
</html>
