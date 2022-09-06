<?php
 $login = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"]  == "POST"){
        
         include "partials/_dbconnect.php";




        $email = $_POST["email"];
        $password  = $_POST["password"];
      
        

        $sql =  "SELECT * FROM user WHERE `email` ='$email' AND `password` = '$password' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if($num  ==  1){
       
                     $login = true;
                       session_start();
                       $_SESSION['loggedin']  = true;
                       $_SESSION['email']  = $email;
                       $_SESSION['password']  = $password;
                       header("location: career.php");
       
          
  
        }
         
         else{
          $showError = "Invalid Credentials";
         }
}
?>
<?php require 'partials/_nav1.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            
<style>
          
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:10vh;
  background-color: black;
  color: white;
  text-align: center;
}

.footer a{
    padding:15px 15px;
    margin:16px 16px;
    color: white;
}
</style>
  </head>
  <body>
   
<?php
if($login){

  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success!</strong> You are  Logged in
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
}



if($showError){

     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> '. $showError.'
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
   }

?>

<h1 class="text-center my-4 text-primary">Login to our Job-Portal</h1>
      <div class="container my-5">
      <form action="login.php" method="POST">
  <div class="mb-4 text-primary">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>

  <div class="mb-4 text-primary">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name = "password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
  <p class="text-primary" style="text-allign:center; "> <br>New User? <a href="register.php">Sign Up</a></p>
  
</form>

<p class="text-primary" style="text-allign:center; "> <a href="adminlog.php">Login As Admin</a></p>
  

<div class="footer">
    <p> Copyright &copy; 2022 simanta All rights reserved</p>
    <a href="https://www.facebook.com/simanta.patowary.7"
          ><i class="fa-brands fa-facebook"></i
        ></a>
        <a href="https://www.linkedin.com/in/simanta-patowary-5104a2208/"
          ><i class="fa-brands fa-linkedin"></i
        ></a>
        <a href="https://www.instagram.com/patowary_simanta/"
          ><i class="fa-brands fa-instagram"></i
        ></a>
        <a href="https://twitter.com/SimantaPatowary"
          ><i class="fa-brands fa-twitter"></i
        ></a>
</div>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>