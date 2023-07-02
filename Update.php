<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
$Cid = $_POST['ID'];
$name = $_POST['Cname'];
$pin = $_POST['pin'];

$query = "Update customer set   Name = '$name', PIN = '$pin' where CAccount_No = '$Cid' ";
$result = mysqli_query($con,$query);
if(isset($_SESSION['id'])){
	$ID =  $_SESSION['id'] ;
$query1 = "Insert into update_detail (CAccount_No , ELoginID ) values ('$Cid','$ID')";
        $result1 = mysqli_query($con,$query1);
            if( $result1){
                echo "";
            }
            else{
                echo "<h3> Customer  isn't updated</h3>";
                echo "Error:".mysqli_error($con);
            }
        
    if($result)
    {
        echo "<h3>Customer's information updated</h3>";
    }
    else{
        echo "<h3>Error in executing query</h3>";
    }

}

?>