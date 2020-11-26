<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

$con = mysqli_connect($servername , $username , $password , $dbname);
if($con)
{
    echo "done";
}
else{
    echo "Failed";
}
?>

  
    
  