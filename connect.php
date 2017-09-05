<?php 

 $con=mysqli_connect("localhost","root","","ritco");
   //Check connection
   if (mysqli_connect_error()) {
    echo "Failed to connect to MySQLi: " . mysqli_connect_error();
   }
?>