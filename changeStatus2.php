<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
    <style>
        body{
            background-color:#e6e6e6;
            text-align:center; 
            font-weight:bold;
            font-size:20px;
        }
     
     </style>
</head>
<body>
    
</body>
</html>


<?php
require('connection.php');
$Cid = $_GET['idd'];
$status = $_GET['status'];

     $query = "update account set AccountStatus = '$status'  where AccountNO = '$Cid' limit 1";
        $result = mysqli_query($con,$query);
            if( $result){
                echo " <h3 >Account Status Updated Successfully</h3>";
            }
            else{
                echo "<h3> Error in executing query </h3>";
                echo "Error:".mysqli_error($con);
            }