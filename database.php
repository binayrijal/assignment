<?php
   require_once('connect.php');
   $query="CREATE DATABASE IF NOT EXISTS assignment";
   $data=mysqli_query($connect,$query);
   if($data){
       echo"database created done";
   }
   else{
       echo "database failed: ". mysqli_error($connect);
   }




?>