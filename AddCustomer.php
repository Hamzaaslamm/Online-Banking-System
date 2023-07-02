
<?php
require('connection.php');
session_start();
$CName = $_POST['Cname'];
$CaccountNo = $_POST['CAccountno'];
$PIN = $_POST['pin'];
$AccountStatus = $_POST['status'];
$AccountType = $_POST['Atype'];
$Balance = $_POST['balance'];

if(isset($_SESSION['id'])){
	$ID =  $_SESSION['id'] ;

    $atm_id = 0;
if($AccountType == "Current"){
    $atm_id = 1;
}
else{
    $atm_id = 2;
}



    $query = " SELECT MLoginID from employee where ELoginID = $ID";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $MLogin = $row['MLoginID'];
    $query1 = "Insert into Account (AccountNO , AccountStatus, AccountType, Balance , MLoginID) values ('$CaccountNo', '$AccountStatus','$AccountType','$Balance','$MLogin')";
    $result1 = mysqli_query($con,$query1);
    if($result1){
        echo "";
    }
    else{
        echo "<h3> Customer  isn't added</h3>";
        echo "Error:".mysqli_error($con);
    }
   

    $query2 = "Insert into customer (CAccount_No , Name, PIN ,id , AccountNO, ATM_ID ) values ('$CaccountNo','$CName' ,'$PIN','1','$CaccountNo', '$atm_id')";
    $result2 = mysqli_query($con,$query2);
        if( $result2){
            header('Location: AddCustomer_html.php? msg=Customer added succesfully');
        
        }
        else{
            echo "<h3> Customer  isn't added</h3>";
            echo "Error:".mysqli_error($con);
        }
    
        $query3 = "Insert into add_detail (CAccount_No , ELoginID ) values ('$CaccountNo','$ID')";
        $result3 = mysqli_query($con,$query3);
            if( $result3){
                echo "";
            }
            else{
                echo "<h3> Customer  isn't added</h3>";
                echo "Error:".mysqli_error($con);
            }
        
}
?>