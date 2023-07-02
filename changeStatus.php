<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Status </title>
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
$query = "select customer.Name , customer.CAccount_No, account.AccountStatus from customer join account on(customer.AccountNO = account.AccountNO)";
$result = mysqli_query($con,$query);

$count =  mysqli_num_rows($result);
if($count==0){
    echo "No customer found!";
}
else{
    echo "
    <h3 style = 'margin-left: 37%; color:brown;font-size: 30px'> Update Customer Account</h3>
    <table style = 'margin-left: 25%;
    border: 5px solid brown;
    margin-top:3%; width: 50% ;
    ' border = 1 cellspacing = 0; cellpadding = 0 >
    <tr>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px ; text-align:center' >Name </td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> CAccountNo </td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> Status </td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> Update </td>
    </tr> 
    
    ";
   while ($row = mysqli_fetch_array($result ,MYSQLI_ASSOC)) {
    $CName = $row['Name'];
    $CaccountNo = $row['CAccount_No'];
   $status= $row['AccountStatus'];
    echo "
    <tr>
    <td style= 'font-weight:bold;  text-align:center'> $CName</td>
    <td style= 'font-weight:bold;  text-align:center'> $CaccountNo</td>
    <form  method = 'get'> 
    <td style= 'font-weight:bold;  text-align:center'> 
    <select style= 'font-weight:bold;  text-align:center' name = 'status'>
    <option value = '$status'> $status </option>";
    
    if($status == 'Non active'){
      echo"  <option value ='Active'> Active </option>";
    }
    else{
      echo  " <option value ='Non Active'> Non-Active</option>";
    }
    echo "</select>
    </td>
    
   <td>
    <button formaction = 'changeStatus2.php' name = 'idd' type = 'submit' value = '$CaccountNo' class='btn btn-danger' style= 'font-weight:bold;  text-align:center ; margin-left: 10%' > Update </button>
    </form></td>
    </tr>
    ";



   }
   echo "</table>"; 
}

?>
</body>
</html>