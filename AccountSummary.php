<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .textBox{
            width : 20%;
            padding: 5px;
        }
        body{

            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
<?php


require('connection.php');
session_start();

if(isset($_SESSION['id'])){
	$ID =  $_SESSION['id'] ;
    //Check our Account details code 
    $query = " SELECT customer.CAccount_No, customer.Name,customer.PIN,account.AccountStatus,account.AccountType,account.Balance from customer JOIN account on(customer.AccountNO=account.AccountNO) where customer.CAccount_No = $ID";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($result){
      // $name = 
       
       echo ' <label style = "color:brown; font-weight:bold;"> CAccountNo </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "CAccount" value = '.$row['CAccount_No'].'>
       <label style = "color:brown; font-weight:bold;"> Name </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "Name" value = '.$row['Name'].'><br>
       <label style = "color:brown; font-weight:bold;"> PIN</label> <br> <input class="form-control textBox form-control-sm" type="text" name = "pin" value = '.$row['PIN'].'><br>
       <label style = "color:brown; font-weight:bold;"> AccountStatus</label> <br> <input class="form-control textBox form-control-sm" type="text" name = "Astatus" value = '.$row['AccountStatus'].'><br>
       <label style = "color:brown; font-weight:bold;"> AccountType</label> <br> <input class="form-control textBox form-control-sm" type="text" name = "AType" value = '.$row['AccountType'].'><br>
       <label style = "color:brown; font-weight:bold;"> Balance </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "balance" value = '.$row['Balance'].'><br>';
       // $displayingresult =  mysqli_num_rows($result);
        //echo "$displayingresult";
    }
}

?>
</body>
</html>
