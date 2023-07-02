<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee details</title>
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
$query = "SELECT employee.Name, employee.ELoginID, employee.Salary, employee.branchNO, deparments.Dept_Name , employee.MLoginID FROM employee JOIN deparments ON(deparments.Dept_ID=employee.Dept_ID)";
$result = mysqli_query($con,$query);

$count =  mysqli_num_rows($result);
if($count==0){
    echo "No Employee found!";
}
else{
    echo "
    <h3 style = 'margin-left: 37%; color:brown;font-size: 30px'>Employee Details</h3>
    <table style = 'margin-left: 25%;
    border: 5px solid brown;
    margin-top:3%; width: 50% ;
    ' border = 1 cellspacing = 0; cellpadding = 0 >
    <tr>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px ; text-align:center' > Name</td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> ELoginID</td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'>Salary </td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> BranchNo </td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'> Department_Name</td>
    <td  style= 'color:green;font-size: 20px;font-weight:bold; height: 50px; text-align:center'>MLoginID</td>
    
    </tr> 
    
    ";
   while ($row = mysqli_fetch_array($result ,MYSQLI_ASSOC)) {
    $EName = $row['Name'];
    $EloginId = $row['ELoginID'];
    $salary = $row['Salary'];
    $Branch = $row['branchNO'];
    $Dept_Name= $row['Dept_Name'];
    $Mlogin_ID= $row['MLoginID'];
    echo "
    <tr>
    <td style= 'font-weight:bold;  text-align:center'> $EName </td>
    <td style= 'font-weight:bold;  text-align:center'> $EloginId</td>
    <td style= 'font-weight:bold;  text-align:center'> $salary</td>
    <td style= 'font-weight:bold;  text-align:center'>$Branch</td>
    <td style= 'font-weight:bold;  text-align:center'> $Dept_Name</td>
    <td style= 'font-weight:bold;  text-align:center'> $Mlogin_ID</td>
    
   
    </tr>
    ";



   }
   echo "</table>"; 
}

?>
</body>
</html>