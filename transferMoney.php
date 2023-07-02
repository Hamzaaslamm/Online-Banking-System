<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
form{
    margin-top: 20%;
    margin-left: 30%;
}
body{
    
    background-color: #e6e6e6;
}
.buttonColor{
    background-color:brown;
    color:  #ffff00;
    border: 2px solid brown;
    border-radius: 10px;
}
</style>
</head>
<body>
<form class="form-inline" >
        
        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text"></div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Debit/Credit no" name = "AccountNo">
        </div>
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter Balance to transfer" name="balance">
      
      
       
      
        <button type="submit" class="btn btn-primary mb-2 buttonColor" formaction="TransferMoney_php.php" formmethod="POST">Submit</button>
      </form>
</body>
</html>