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

    $query = " SELECT employee.Name, employee.ELoginID, employee.Salary, employee.Password, employee.branchNO, deparments.Dept_Name FROM employee JOIN deparments ON(deparments.Dept_ID=employee.Dept_ID) WHERE employee.ELoginID = $ID";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($result){
      // $name = 
       
       echo ' <label style = "color:brown; font-weight:bold;"> Name </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "Name" value = '.$row['Name'].'>
       <label style = "color:brown; font-weight:bold;"> Department name </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "dept" value = '.$row['Dept_Name'].'><br>
       <label style = "color:brown; font-weight:bold;"> ELoginID </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "LoginId" value = '.$row['ELoginID'].'><br>
       <label style = "color:brown; font-weight:bold;"> Salary </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "sal" value = '.$row['Salary'].'><br>
       <label style = "color:brown; font-weight:bold;"> Password </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "pass" value = '.$row['Password'].'><br>
       <label style = "color:brown; font-weight:bold;"> BranchNo </label> <br> <input class="form-control textBox form-control-sm" type="text" name = "branch" value = '.$row['branchNO'].'><br>';
       // $displayingresult =  mysqli_num_rows($result);
        //echo "$displayingresult";
    }
}

?>
</body>
</html>
