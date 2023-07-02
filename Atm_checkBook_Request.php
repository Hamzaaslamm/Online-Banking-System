<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM/CheckBook Request</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color:#e6e6e6;
            width : 100%;
            height: 100%;
        }
        .button-styling{
            display: block;
            text-align:center;
            margin-left: 45%;
        }

    </style>
</head>
<body>
    <form action = "atm.php">
<button type="submit" class="btn btn-secondary button-styling" style = " margin-top: 22%;"  name = "ATM" formaction = "atm_Check_Request.php" formmethod  = "post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATM Request&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; </button></form>
<form >
<button type="submit" class="btn btn-secondary button-styling" style = " margin-top: 2%;" name = "CheckBook" formaction = "atm_Check_Request.php" formmethod  = "post">ChequeBook Request</button></form>
</body>
</html>