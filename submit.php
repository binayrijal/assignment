<?php
     require_once('connect.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
            $username=$_POST['name'];
            $userroll=$_POST['roll'];
            $userdate=$_POST['date'];
            $useremail=$_POST['email'];
            $useradd=$_POST['add'];
            $userpho=$_POST['phone'];

           
            $error=array();
            if(empty($username)){
             $error['name']="name cannot be empty";
            }
            else{
                 if(!preg_match('/^[A-Z][a-z]+\s[A-Z][a-z]+(\s[A-Z][a-z]+)?$/',$username)){
                     $error['name']="name contain only alphabet";
                 }
            }
            if(empty($userroll)){
                $error['roll']="roll cannot be empty";
            }
            else{
                if(!preg_match('/^[0-9]+$/',$userroll)){
                    $error['roll']="roll contain only numbers";
                }
            }
            if(empty($userdate)){
                $error['date']="date cannot be empty";
            }
            else{
                 if(!preg_match('/^[0-9]+$/',$userdate))
                 {
                     $error['date']="date contain only numbers";
                 }
            }
            if(empty($useremail)){
                $error['email']="email cannot be empty";
            }
            else{
                if(!filter_var($useremail, FILTER_VALIDATE_EMAIL)){
                   $error['email']="email invalid";
                }
            }
            if(empty($useradd)){
                $error['add']="empty address";
            }
            if(empty($userpho)){

                $error['phone']="empty phone number";

            }
            else{
                if(!preg_match('/^[0-9]+&{10}/',$userpho)){
                    $error['phone']="invalid phone";
                }
            }
            
            
            if(count($error)=='0'){
                $select=mysqli_select_db($connect,'assignment');
               
                if($select){
                    $query1="CREATE TABLE user(name VARCHAR(50),roll INT(6) AUTO_INCREMENT PRIMARY KEY, date date(10),email VARCHAR(100) NOT NULL,add TEXT(100), phone INT(10) NOT NULL";
                    $result1=mysqli_query($connect,$query1);
                    
                
                    if($result1){
                        echo"table created";

                    }
                    else{
                        echo"error:" .mysqli_error($connect);

                    }
                }    
                else{
                     echo"error:".mysqli_error($connect);
                }    
              

                      

                      
                
            
            }
             

        
           
           
    }
    else{
             header('Location:index.php?error='. serialize($error));
    }

        
           
            
      
           
    
           
      
           
        
  
    

?>    



