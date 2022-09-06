<?php
$server = "localhost";
$name = "root";
$password = "";
$database =  "jobs";

$conn = mysqli_connect($server, $name, $password, $database);
if(!$conn)
{


    die("Error". mysqli_connect_error());
}



?>