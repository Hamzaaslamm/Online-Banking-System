<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
form{
    margin-top: 20%;
    margin-left: 33%;
    width:30%;

  
}
body{
    
    background-image: url('maindiv.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}
.buttonColor:hover{
    background-color: white;
    color: royalblue;
    font-weight: bolder;
    border: 2px solid royalblue;
    border-radius: 10px;

}
button{
  margin-left:100px;
  width:200px;
}
h1{
  color:white;
  margin-left:40px;
}


</style>

</head>
<body>

    <form class="form" >
      <h1>Banking System</h1>
        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            
          </div>
          <input type="text" class="form-control" id="loginId" placeholder="Enter Account No" name = "loginId" ><br>
        </div>
        <span class="text-danger" id="error"></span>
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input type="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter Password" name="pass">
       
      
       
      
        <button type="submit" class="btn btn-primary mb-2 buttonColor" formaction="login.php" formmethod="POST">Submit</button>
      </form>
      <div style = "text-align:center ; font-size: 20px ; font-weight: bold; color : black">
      <?php 
  if(isset($_GET['msg'])){
    echo $_GET['msg'];
  }
      ?></div>

      <script type="text/javascript">
        const li = document.getElementById('loginId');
        const err = document.getElementById('error');
        li.addEventListener('keyup', function(){
          if(li.value === ""){
            err.style.display='none';
            err.innerHTML = '';
          }
          if(!Number(li.value)){
            err.style.display = 'block';
            err.innerHTML = 'Only numbers are allowed';
          }else{
            err.style.display = 'none';
            err.innerHTML = '';
          }
        });       
        
      </script>
      
</body>
</html>