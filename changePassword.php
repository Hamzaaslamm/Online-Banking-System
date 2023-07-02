<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-color:#e6e6e6;
            width : 100%;
            height: 100%;
        }

    </style>
</head>
<body>
<?php
require('connection.php');
session_start();
$pass = $_POST['pass'];
if(isset($_SESSION['id'])){
    $ID = $_SESSION['id'];
    $query = NULL;
    if(substr($ID,1,2) == '00'){
        $query = "update manager set Password = $pass where MLoginID = $ID limit 1 ";
    }elseif(substr($ID,1,1) == '0'){
        $query = "update employee set Password = $pass where ELoginID = $ID limit 1 ";
    }else {
        $query = "update customer set PIN = $pass where CAccount_No = $ID limit 1 ";
    }

$result = mysqli_query($con,$query);
if($result){
    echo "<h3 style = 'text-align:center'> Password Change Successfully!<h3>";
}
else{
    echo "<h3 style = 'text-align:center'>Cannot Change Password  <h3>";
    echo "Error:".mysqli_error($con);
}
}

?>
    
</body>
</html>

