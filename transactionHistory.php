<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{

            background-color: #e6e6e6;
            width : 100%;
            height: 100%;
        }
    

    </style>
</head>
<body>
<?php

require("connection.php");
session_start();
if(isset($_SESSION['id'])){
    $ID = $_SESSION['id'];
$query = "select make.CAccount_No , transaction.Amount,save_transaction.AccountNO from make join transaction on(make.T_ID= transaction.T_ID) join save_transaction on(transaction.T_ID = save_transaction.T_ID) where make.CAccount_No = $ID";
$result = mysqli_query($con,$query);

$count =  mysqli_num_rows($result);
if($count==0){
    echo "<h3>No transaction found!</h3>";
    
}
else{
    echo "
    <h3 style = 'margin-left: 37%; color:brown;font-size: 30px'> Transaction History</h3>
    <table style = 'margin-left: 25%;
    border: 5px solid brown;
    margin-top:3%; width: 50% ;
    ' border = 1 cellspacing = 0; cellpadding = 0 >
    <tr>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px ; text-align:center' >Sender</td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> Receipent </td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'>Amount</td>
    </tr> 
    
    ";
   while ($row = mysqli_fetch_array($result ,MYSQLI_ASSOC)) {
    $sender = $row['CAccount_No'];
    $receipent = $row['AccountNO'];
    $amount = $row['Amount'];
    echo "
    <tr>
    <td style= 'font-weight:bold;  text-align:center'> $sender</td>
    <td style= 'font-weight:bold;  text-align:center'> $receipent</td>
    <td style= 'font-weight:bold;  text-align:center'>   $amount </td>
    
    </tr>
    ";



   }
   echo "</table>"; 
}
}
?>
</body>
</html>