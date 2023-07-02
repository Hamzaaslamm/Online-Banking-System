<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
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
    <h3> Add Customer's Information</h3>
    <div>
        <form >
<input class="form-control form-control-lg textBox" type="text" placeholder="CustomerName" name = " Cname" >
<input class="form-control form-control-lg textBox" type="text" placeholder="Customer Account no" name = " CAccountno">
<input class="form-control form-control-lg textBox" type="text" placeholder="PIN" name = "pin">
<select class="form-control form-control-lg textBox" name ="status" >
    <option value ="Active"> Active </option>
    <option value = "Non active"> Non-Active </option>
    </select>
<select class="form-control form-control-lg textBox" name ="Atype" >
    <option value ="Current"> Current </option>
    <option value = "Saving"> Saving </option>

</select>
<input class="form-control form-control-lg textBox" type="text" placeholder="Balance" name = "balance">
<button type="submit" class = "btn btn-danger" formaction = "AddCustomer.php" formmethod = "post" >Add</button>

</div></form>
<div style = "margin-left: 40%;font-weight:bold; font-size:20px">
<?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }

?></div>
</body>
</html>