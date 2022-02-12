 <?php 
  require_once('connect.php');
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $select=mysqli_select_db($connect,'assignment');
    if($select){
         $query2="INSERT INTO user(name, roll,date,email,add,phone) VALUE('$username',$userroll,'$userdate','$useremail','$useradd','$userpho')";
            $result2=mysqli_query($connect,$query2);
                      if($result2){
                          echo "insert successfull";
                      }
                      else{
                          echo"error:".mysqli_error($connect);
                      }
    }
    else{
                    echo"error:" . mysqli_error($connect);
    }
}
else{
    echo"error:". mysqli_error($connect);
}
 ?>