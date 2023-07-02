<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove</title>
</head>
<body>
    <style>
         body{
            background-color:#e6e6e6;
            text-align:center; 
            font-weight:bold;
            font-size:20px;
        }

    </style>
</body>
</html>


<?php
session_start();
require('connection.php');
$Cid = $_GET['idd'];
if(isset($_SESSION['id'])){
	$ID =  $_SESSION['id'] ;

     $query2 = "delete from add_detail  where CAccount_No = '$Cid' limit 1";
        $result2 = mysqli_query($con,$query2);
            if( $result2){
                echo "";
            }
            else{
                echo "<h3> Error in executing query </h3>";
                echo "Error:".mysqli_error($con);
            }
$query1 = "delete from customer where CAccount_No = '$Cid' limit 1";
$result1 = mysqli_query($con,$query1);
if($result1){
    echo "<h3>Customer has been deleted</h3>";
    
    }
    else{
        echo "<h3>Error in executing query</h3> ";
        echo "Error:".mysqli_error($con);
    }

    $query = " delete from Account  where AccountNO = '$Cid' limit 1";
    $result = mysqli_query($con,$query);
    if($result){
        echo "";
    }
    else{
        echo "<h3>Error in executing query</h3>";
        echo "Error:".mysqli_error($con);
    }

    
       
           
        }

?>