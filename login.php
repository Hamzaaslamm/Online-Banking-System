<?php
require("connection.php");
$LoginID = $_POST['loginId'];
$password = $_POST['pass'];
$query = null;
$ID = 0;

if(substr($LoginID,1,2) == '00'){
    $query = "select MLoginID  from manager where MLoginID = $LoginID and Password = $password limit 1";
    
}elseif(substr($LoginID,1,1) == '0'){
    $query = "select ELoginID  from employee where ELoginID = $LoginID and Password = $password limit 1";
}else {
    $query = "select CAccount_No  from customer where  CAccount_No = $LoginID and PIN = $password limit 1";
}
$result = mysqli_query($con,$query);
$id = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count > 0){
    if(strlen(strval($id['ELoginID']))==3){
        session_start();
        $_SESSION['id'] = strval($id['ELoginID']);
    header('Location:\LoginTemplate\indexEmployee.html');}
    else if(strlen(strval($id['MLoginID']))==4){
        session_start();
        $_SESSION['id'] = strval($id['MLoginID']);
        header('Location:\LoginTemplate\indexManager.html');}
    else if(strlen(strval($id['CAccount_No']))> 4){
        session_start();
        $_SESSION['id'] = strval($id['CAccount_No']);
            header('Location:\LoginTemplate\indexCustomer.html');
        }      

    }
    else{
        header('Location:LoginPage.php?msg="Invalid ! Enter Again."');
    }

?>