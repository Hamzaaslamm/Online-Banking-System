<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color:#e6e6e6;
            width : 100%;
            height: 100%;
        }
        #styling{
            margin-top:20%;
            margin-left:33%;
        }
        #input-styling{
            width:29%;
        }
       
    </style>
</head>
<body>
<form>
    <div id = "styling">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>New Password</strong></label>
    <div class="col-sm-10">
      <input id = "input-styling" type="text" class="form-control" id="inputEmail3" name = "pass" placeholder="Enter new Password...">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-primary" formaction = "changePassword.php" formmethod = "post">Update </button>
    </div>
  </div>
  </div>
</form>
</body>
</html>