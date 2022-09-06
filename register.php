<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"]  == "POST"){
        
         include "partials/_dbconnect.php";
         $name = $_POST["name"];
         $email = $_POST["email"];
         $password = $_POST["password"];
         $cpassword = $_POST["cpassword"];
         $number = $_POST["phone_no"];
      
       
        
         $existSql = "SELECT * FROM `user` WHERE email ='$email'";
         $result = mysqli_query($conn, $existSql);
         $numExistRows = mysqli_num_rows($result);
        
         
         if($numExistRows > 0){
               $showError = " email is already exist";
         }
         else{
         
      
         if(($password == $cpassword)) 
         {
              $sql = "INSERT INTO `user` (`name`, `email`,  `password`,`phone_no`) VALUES ('$name', '$email', '$password', '$number')";
              $result = mysqli_query($conn, $sql);

              if($result){
                     $showAlert = true;
                     header("location: login.php");
              }   
          }
         else{
          $showError = "Password donot  match";
         }
}
}
?>
<?php require 'partials/_nav1.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
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

.container{
   padding-bottom:10%;
}
    </style>
  </head>
  <body>

<?php
if($showAlert){

  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success!</strong> You are Successfully register in our website and you can login now.
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

<h1 class="text-center my-5 text-primary">Signup to our Job-Portal</h1>
      <div class="container my-4">
      <form action="register.php" method="POST">
  <div class="mb-1 text-primary">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="mb-1 text-primary">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  
  </div>
  <div class="mb-1 text-primary">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div>

  <div class="mb-1 text-primary">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-1 text-primary">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="cpassword">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Signup</button>
  <br>
  Already Registered? <a href="login.php"> <b>Login</b></a>
</form>

      </div>
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