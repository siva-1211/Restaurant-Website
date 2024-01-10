<?php
include "database.php";
$id=$_GET['updateid'];




$sql="select * from user_details where ID=$id";
$result=mysqli_query($db,$sql);

$info=mysqli_fetch_assoc($result);
$email=$info['Email'];
$password=$info['Password'];
$confirmpassword=$info['Confirm_Password'];


if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    $str="update user_details set ID=$id,Email='$email',Password='$password',Confirm_Password='$confirmpassword' where ID=$id";
    
    $result=mysqli_query($db,$str);
    if($result){
        header('location: user_data.php');
    }
    else{
        die(mysqli_error($db));
    }
}

?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <link rel="stylesheet" href="./css/createaccount.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
    



</head>

<body>
    <script src="createaccount.js">
   
        
        
    </script>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<div class="container-fluid">
    <div class="row">
      <header class="header">
        <nav class="navbar">
          <a href="#" class="logo">Los Pollos </a>

          <ul class="nav-items">
            <li class="nav-item">
              <a href="#" class="nav-link">Home</a>
              <a href="#" class="nav-link">Contact us</a>
              <a href="#" class="nav-link">Service</a>
            </li>

          </ul>
          <a href="samplelogin.html"> <button class="button" onclick="">Login</button></a>





        </nav>

      </header>
    </div>

    <form class="container d-flex justify-content-center align-items-center vh-100" method="POST">
        <div class="details d-flex-column">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?php echo $email ?>">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $password ?>">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Passwprd" name="confirmpassword" value="<?php echo $confirmpassword ?>">
            </div>
          <div class="loginbutton d-flex justify-content-center">
            <button type="submit" name="submit" class="signinbutton">
              UPDATE AN ACCOUNT
            </button>

        </div>
         
        </div>
        
      </form>
      <div class="row">
        <div class="footer">
          <div class="content4">
            <div class="ordernow">
              <ul>
                <li class="footertitle1">Order now</li>
  
                <li><a class="footercontent1" href="#">Deals</a></li>
                <li><a class="footercontent1" href="#">Burgers</a></li>
                <li><a class="footercontent1" href="#">Pizza</a></li>
                <li><a class="footercontent1" href="#">drinks</a></li>
                <li><a class="footercontent1" href="#">Desserts</a></li>
              </ul>
            </div>
  
            <div class="aboutus">
              <ul>
                <li class="footertitle2">About</li>
  
                <li><a class="footercontent2" href="#">About us</a></li>
                <li><a class="footercontent2" href="#">Contacless delivery</a></li>
                <li><a class="footercontent2" href="#">Menu</a></li>
                <li><a class="footercontent2" href="#">Nutrition</a></li>
                <li><a class="footercontent2" href="#">Reviews</a></li>
              </ul>
            </div>
  
  
            <div class="ourpolicies">
              <ul>
                <li class="footertitle3">Our policies</li>
  
                <li><a class="footercontent3" href="#">Privacy</a></li>
                <li><a class="footercontent3" href="#">Terms & Conditions</a></li>
                <li><a class="footercontent3" href="#">Responsible disclosure</a></li>
                <li><a class="footercontent3" href="#">FAQs & Help</a></li>
  
              </ul>
            </div>
  
            <div class="visitlosPollos">
              <ul>
                <li class="footertitle4">Visit Los Pollos</li>
  
                <li><a class="footercontent4" href="#">Locate a store</a></li>
                <li><a class="footercontent4" href="#">Global blog</a></li>
  
              </ul>
            </div>
  
  
  
          </div>
          <div class="apps">
            <a href="#"><img
                src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSXhTpVLVjVH9dWeD7VHOFlegqrSHY4A4DGIlkEzRdCU3RHFXRc"
                alt="" width="120px" height="40px"></a>
            <a href="#"><img
                src="https://www.pizzahut.co.in/order/images/icons/app-store-google-play.b1ffb9f40420b63efe43e34f60bfb682.png"
                alt="" width="120px" height="40px"></a>
          </div>
          <div class="followus">
            <div class="folowustitle">Follow Us</div>
          </div>
          <div class="icons">
            <div class="facebook">
              <a href="#"><img
                  src="	https://www.pizzahut.co.in/order/images/icons/social-white-facebook.7cce5c98cdf27ef51601f3650f73b465.png"
                  alt=""></a>
            </div>
            <div class="twitter">
              <a href="#"><img
                  src="https://www.pizzahut.co.in/order/images/icons/social-white-twitter.ef766a459cb51bbdaf9b24eaa5d21289.png"
                  alt=""></a>
            </div>
            <div class="instagram">
              <a href="#"><img
                  src="https://www.pizzahut.co.in/order/images/icons/social-white-instagram.cf20de72a775ca841c887ea845457fa0.png"
                  alt=""></a>
            </div>
            <div class="youtube">
              <a href="#"><img
                  src="https://www.pizzahut.co.in/order/images/icons/social-white-youtube.c5d3435334b39f9535c1eeb639938a30.png"
                  alt=""></a>
            </div>
          </div>
        </div>
  
      </div>
  
    </div>
</div>

</body>
</html> 










