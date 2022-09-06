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






<div class="content" >
  
<table class="table">
  <tbody>
   <?php 
   include "partials/_dbconnect.php";
   $sql = "select name, apply, qual, year from candidate";
   $result = mysqli_query($conn,$sql);
   $i = 0;
     
     if($result->num_rows>0)
     {
        while($rows= $result->fetch_assoc()){
              echo'
                 <tr>
                    <th scope="row">'.++$i.'</th>
                    <td>'.$rows['name'].'</td>
                    <td>'.$rows['apply'].'</td>
                    <td>'.$rows['qual'].'</td>
                    <td>'.$rows['year'].'</td>
                    
                 </tr>';
        }}
        else{
          echo"";
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