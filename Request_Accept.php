<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Status</title>
    <style>
        body{

            background-color: #e6e6e6;
            width : 100%;
            height: 100%;
            text-align:center;
            Font-size: 25px;
        }
    

    </style>
</head>
<body>
    
</body>
</html>

<?php
require('connection.php');

$CAccount = $_POST['idd'];

if($_POST['status'] == 'Approved'){
    $query = "update customer set Request_Status = 'Approved' where CAccount_No = '$CAccount'";
    $result = mysqli_query($con,$query);
    if($result){
        echo "Request Approved!";
    }
    else{
        echo "Request didn't Approved!";
    }

}

if($_POST['status'] == 'Reject'){
    $query = "update customer set Request_Status = 'Reject' where CAccount_No = '$CAccount'";
    $result = mysqli_query($con,$query);
    if($result){
        echo "Request Rejected!";
    }
    else{
        echo "Request didn't Rejected!";
    }

}






?>