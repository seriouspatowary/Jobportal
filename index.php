<?php

 $showError = false;
if($_SERVER["REQUEST_METHOD"]  == "POST"){
        
         include "partials/_dbconnect.php";
         $cname = $_POST["cname"];
         $position = $_POST["position"];
         $jdesc = $_POST["jdesc"];
         $skills = $_POST["skills"];
         $ctc = $_POST["ctc"];
      
       
       
      
    
         
        $sql = "INSERT INTO `jobs` (`cname`, `position`,  `jdesc`,`skills`,`ctc`) VALUES ('$cname', '$position', '$jdesc', '$skills','$ctc')";
        $result = mysqli_query($conn, $sql);

      if($result){
              echo "data store successfully";
              }   
          
         else{
          $showError = "Password donot  match";
         }
}

?>


<?php require 'partials/_nav.php' ?>


<style>
  
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 10vh;
  background-color: black;
  color: white;
  text-align: center;
}

.footer a{
    padding:15px 15px;
    margin:16px 16px;
    color: white;
    padding-bottom:10%
}
</style>

<div class="content">
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">

  <form action="index.php" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="cname" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition1" name="position">
  </div>
  <div class="mb-3">
    <label for="jobDesc" class="form-label">Jobs Description</label>
    <textarea type="text" class="form-control" id="jobDesc" cols="20" rows="5" name ="jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="ctc" name ="ctc">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    
    </tr>
  </thead>
 
    <?php
     include "partials/_dbconnect.php";
     $sql = "select cname, position, ctc from jobs";
     $result = mysqli_query($conn,$sql);
     $i = 0;
     
     if($result->num_rows>0)
     {
        while($rows= $result->fetch_assoc()){

        
         echo"
         <tbody>
            <tr>
             
                <td>".++$i."</td>
                <td> ".$rows['cname']."</td>
                <td> ".$rows['position']."</td>
                <td> ".$rows['ctc']."</td>
                </tr>";

     }
    }
    else{
      echo "";
    }
    ?>
    
  </tbody>
</table>
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

<script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
</body>
</html>