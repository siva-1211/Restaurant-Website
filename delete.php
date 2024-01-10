<?php
include "database.php";


    $id=$_GET['deleteid'];

    $delete="delete from user_details where ID =$id";
    $result=mysqli_query($db,$delete);
    if($result){
        header('location: user_data.php');
    
    }
    else{
        die(mysqli_errpr($db));
    }

?>