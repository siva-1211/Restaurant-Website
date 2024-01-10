<?php
include "database.php";

echo "dvr";
if(isset($_POST['submit'])){

    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    $str="insert into user_details (Email,Password,Confirm_Password) values('$email','$password','$confirmpassword')";
    $result=mysqli_query($db,$str);
    if($result){
        header('location: user_data.php');
   }
   else{
    
    die(mysqli_error($db));
   }

}
