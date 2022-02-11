 <?php 
  require_once('connect.php');
  $select=mysqli_select_db($connect,'assignment');
    if($select){
         $query2="INSERT INTO user(name, roll) VALUE('$username',$userroll)";
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
 ?>