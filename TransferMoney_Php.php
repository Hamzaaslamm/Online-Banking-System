<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Transfered</title>
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
$AccountNo = $_POST['AccountNo'];
$balance = $_POST['balance'];

$query = "select CAccount_No from customer where CAccount_No = '$AccountNo' limit 1";
$result = mysqli_query($con,$query);


$count = mysqli_num_rows($result);

if($count ==0){
    echo"No Account No Found!";
}
else{
    session_start();
    if(isset($_SESSION['id']))
    {
        $account = $_SESSION['id'];
        $query1 = "Select Balance from account where AccountNO = '$account'";
        $result1 = mysqli_query($con,$query1);
        $array = mysqli_fetch_array($result1);
        if( $array['Balance'] >= $balance){
        $Account_Balance = "Select Balance from account where AccountNO = '$AccountNo'";
        $result2 = mysqli_query($con,$Account_Balance);
        $array2 = mysqli_fetch_array($result2);
        $totalBalance = $array2['Balance'] + $balance;
        $Updated_Balance = "Update account set Balance = '$totalBalance' where AccountNO = '$AccountNo' limit 1";
        $result2 = mysqli_query($con, $Updated_Balance);
        $remaining_balance = $array['Balance'] - $balance;
        $Updated_Balance2 = "Update account set Balance = '$remaining_balance' where AccountNO = '$account' limit 1";
        $result3 = mysqli_query($con, $Updated_Balance2);
        if($result3){
            echo "<h3></h3>";
        }
        else{
            echo "<h3 style= 'font-weight:bold;  text-align:center';> Error in executing query</h3>";
            echo "Error:".mysqli_error($con);
        }
        if($result2){
            echo "<h3 style= 'font-weight:bold;  text-align:center';>Money transfer Successfully!</h3>";
        }
        else{
            echo "<h3 style= 'font-weight:bold;  text-align:center';> Error in executing query</h3>";
            echo "Error:".mysqli_error($con);
        }
         //Insert in tables
        $transaction = "Insert into transaction(Amount) values ('$balance') ";
        $result4 = mysqli_query($con,$transaction);
        if($result4){
            echo "<h3></h3>";
        }
        else{
            echo "<h3 style= 'font-weight:bold;  text-align:center';> Error in executing query</h3>";
            echo "Error:".mysqli_error($con);
        }

        $getT_ID = "select T_ID from transaction order by T_ID desc limit 1 ";
        $result_TID = mysqli_query($con,$getT_ID);
        $array_TID  = mysqli_fetch_array($result_TID);
        
        $make = "Insert into make(T_ID , CAccount_No) values ('$array_TID[T_ID]','$account') ";
        $result5 = mysqli_query($con,$make);
        if($result5){
            echo "<h3></h3>";
        }
        else{
            echo "<h3 style= 'font-weight:bold;  text-align:center';> Error in executing query</h3>";
            echo "Error:".mysqli_error($con);
        }

        $getsaveT_ID = "select T_ID from transaction order by T_ID desc limit 1 ";
        $result_saveTID = mysqli_query($con, $getsaveT_ID);
       $array_saveTID= mysqli_fetch_array($result_saveTID);
       
         $save = "Insert into save_transaction(T_ID , AccountNO) values ('$array_TID[T_ID]','$AccountNo ') ";
        $result6 = mysqli_query($con,$save);
        if($result6){
            echo "<h3></h3>";
        }
        else{
            echo "<h3 style= 'font-weight:bold;  text-align:center';> Error in executing query</h3>";
            echo "Error:".mysqli_error($con);
        }

        }
        else{
            echo "<h3 style= 'font-weight:bold;  text-align:center';>  Insufficient Balance<h3>";
        }

       
       
        

    }

}




?>
</body>

</html>


