<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
    <style>
          body{
            background-color:#e6e6e6;
            width : 100%;
            height: 100%;
            text-align:center;
            Font-size: 25px;
        }
    </style>
</body>
</html>

<?php
require('connection.php');
    session_start();
    $ID = NULL;
if(isset($_SESSION['id'])){
    $ID = $_SESSION['id'];
}
if(isset($_POST['ATM'])){
    $query = "Update customer set Request_Type = 'ATM' , Request_Status = 'Pending'  where CAccount_No = $ID";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<h3>Request Send Successfully!</h3>";
    }
    else{
        echo "<h3>Request Status is still null!</h3>";
    }
}

if(isset($_POST['CheckBook'])){
    $query = "Update customer set Request_Type = 'Cheque Book' , Request_Status = 'Pending'  where CAccount_No = $ID";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<h3>Request Send Successfully!</h3>";
    }
    else{
        echo "<h3>Request Status is still null!</h3>";
    }
}



?>