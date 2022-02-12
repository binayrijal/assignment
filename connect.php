<?php
   $server="localhost";
   $username="root";
   $password="";
   $connect=mysqli_connect($server,$username,$password);
   if($connect){
       echo "registration successfull";

   }
   else{
       echo"server not connect".mysqli_error();
   }


?>