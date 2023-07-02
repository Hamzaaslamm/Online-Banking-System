<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .textBox{
            width : 20%;
            padding: 3px;
            margin: 8px;
          margin-left: 40%;
          
        }
        div{
            margin-top: 4%;
        }
        body{

            background-color: #e6e6e6;
        }
        h3{
            text-align: center;
            color: brown;
            font-size: 30px
        }
        button{
            width: 7%;
            height: 8%;
            background-color: brown;
            color:  blanchedalmond;
            margin-left: 40%;
            border: 5px solid blanchedalmond;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <?php
    require('connection.php');
    $ID = $_GET['idd'];
    $query = "Select * from customer where CAccount_No = $ID";
    $result = mysqli_query($con,$query);
     if($result){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $CName = $row['Name'];
            $PIN = $row['PIN'];
        echo '
    <h3> Update Customer Information</h3>
    <div>
        <form >
<input class="form-control form-control-lg textBox" type="text" placeholder="CustomerName" name = " Cname" value = '.$CName.' >

<input class="form-control form-control-lg textBox" type="text" placeholder="PIN" name = "pin" value = '.$PIN.'>
<select class="form-control form-control-lg textBox" name ="status" >
    <option value ="Active"> Active </option>
    <option value = "Non active"> Non-Active </option>
    </select>
<select class="form-control form-control-lg textBox" name ="Atype" >
    <option value ="Current"> Current </option>
    <option value = "Saving"> Saving </option>

</select>

<button type="submit" class = "btn btn-danger" formaction = "Update.php" formmethod = "post" value='.$ID.' name = "ID" >Update</button>

</div></form>'; }
echo '<div style = "margin-left: 40%;font-weight:bold; font-size:20px">';

    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }

echo '</div>'; ?>
</body>
</html>