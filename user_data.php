<?php
include "database.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/3cfe6d7e2919d98e0c6994d3dfbeda2c?family=Turista+Gorda+NF+W01+Regular"
        rel="stylesheet">



    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>USER_DATA</title>
    <style>
      a{
        text-decoration:none;
      }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
        <div class="container">
        <table class="table d-flex-row mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">CONFRIM PASSWORD</th>
      <th scope="col">DATE & TIME</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $data="select * from user_details";
    $result=mysqli_query($db,$data);
    if($result){
      while($info=mysqli_fetch_assoc($result)){
        $id=$info['ID'];
        $email=$info['Email'];
        $password=$info['Password'];
        $confirmpassword=$info['Confirm_Password'];
        $dateandtime=$info['Date & Time'];
        echo 
        '<tr>
        <th>'.$id.'</th>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$confirmpassword.'</td>
        <td>'.$dateandtime.'</td>
        <td>
        <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
        <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
        </td>
        


      </tr>';
      }
    }
    ?>
   
   
  </tbody>
</table>
        </div>
 
    
</body>
</html>