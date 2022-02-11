<?php
 if(isset($_GET['error'])){
     $errormsg= unserialize( $_GET['error']);
     echo"<ul>";
     foreach($errormsg as $errors){
         echo"<li>$errors</li>";
     }
     echo"</ul>";
    
 }

?>
<html>
    <head>
        <title>
            form submission
        </title>
        <style>
        
        body{
            background-image:  url('back.jpg');
            background-size:cover;
            height:100vh;
            color:white; 
        }
        #navi a{
            padding:10px;
            font-size:30px;
            margin:10px;
            border-radius:10px;
           
        }
        #navi a:hover{
            background-color:black;
            border:2px solid red;
            color:red;
        }
        #navi{
            position:relative;
            left:500px;
            top:20px;
            width:fit-content;
        }
        form input{
            opacity:0.5;
        }
        form input:hover{
            opacity:1.0;
        }


    </style>
    </head>
    <body>
        <div>
            <div id="navi">
                <a style="">Home</a>
                <a>About</a>
                <a>Contact us</a>
                <a>More</a>
            </div>
            <form style="position:relative;left:600px;top:100px; width:fit-content;">
              Name:<input type="text" name="name" style="margin-top:20px; padding:10px;"  required></br>
              Roll:<input type="number" name="roll" style="margin-top:20px;padding:10px;" required></br>
              Dob:<input type="date" name="date" style="margin-top:20px;padding:10px;" required></br>
              Email:<input type="email" name="email" style="margin-top:20px; padding:10px;" required></br>
              Address:<input type="text" name="add" style="margin-top:20px; padding:10px;" required></br>
              contact:<input type="number" name="phone" style="margin-top:20px; padding:10px;" required></br>    
                <input type="submit" name="submit" style="position:relative; left:10px; margin:40px; width:200px; border-radius:5px;background-color:green;">






            </form>
        

       
        <div>
    </body>



</html>