<?php require 'partials/_nav1.php' ?>

<?php
session_start();

if(!isset($_SESSION['loggedin'])  ||   $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      .container{
        padding-bottom: 20%;
      }
     
.feed {
  padding: 110px;
  background-image: url(1.jpg);
  background-size: cover;
  background-repeat:no-repeat;
}

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
<title>Career</title>
</head>
<body>
        

        <div class="feed">
  
          <div class="card text-center text-auto mt-3 mr-4 bg-success ">
            <div class="card-body mx-1">
                  <p class="h2 text-center text-light">Job Portal</p>
                  <p class="h4 text-center text-light">Best job available matching your skill</p>
          </div>
          </div>
          
  
        </div>
   
   

    <div class="row">

    <?php


      include "partials/_dbconnect.php";


      $sql = "SELECT cname,position,jdesc,skills,ctc from jobs";
      $result = mysqli_query($conn,$sql);

      if($result->num_rows>0)
      {
         while($rows= $result->fetch_assoc()){
 
         
          echo'
              
              
          <div class="container col-md-3 mx-auto my-2">
           <div class="card-deck mx-4">
                <div class="card text-center text-auto mt-3">
                <div class="card-body mx-auto">
                    <h3 style="text-align:center;">'.$rows['position'].'</h3>
                    <h4 style="text-align:center; color:blue;">'.$rows['cname'].'</h4>
                    <p style="color:black; text-align: center;">'.$rows['jdesc'].'</p>
                    <p style="color:black;"><b>Skill required:</b>'.$rows['skills'].'</p>
                    <p style="color:black;"><b>CTC:</b>'.$rows['ctc'].'</p>
                    <button type="submit" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" name="submit">apply now</button>
                  
                </div>
                  </div>
                  </div>
                 
              </div>';
 
      }
     }
     else{
       echo "";
     }
     ?>

     
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for the job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action = "config.php" method ="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year of passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        
         </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Apply</button>
          </form>
        </div>
      
    </div>
  </div>
</div>


    </div>
  
    
<script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
      
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
</body>
</html>