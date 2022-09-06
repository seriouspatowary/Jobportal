<?php

 $showError = false;
if($_SERVER["REQUEST_METHOD"]  == "POST"){
        
         include "partials/_dbconnect.php";
         $name = $_POST["name"];
         $apply = $_POST["apply"];
         $qual = $_POST["qual"];
         $year = $_POST["year"];
       
      
       
       
      
    
         
        $sql = "INSERT INTO `candidate` (`name`, `apply`,  `qual`,`year`) VALUES ('$name', '$apply', '$qual', '$year')";
        $result = mysqli_query($conn, $sql);

      if($result){
        header("location: career.php");
              }   
          
         else{
          $showError = "Error";
         }
}

?>
