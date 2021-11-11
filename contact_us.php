<?php
include('connect_db.php');
session_start();
       if(isset($_POST['submit']))
  {
    $name=trim($_POST['n']);
    $phno=trim($_POST['mn']);
    $email=trim($_POST['em']);
    $city=trim($_POST['c']);
    $message=trim($_POST['mes']);    
        if($name==""||$phno==""||$email==""||$city==""||$message=="")
    {
      echo "<script>alert('Please enter this field');
       window.location.href='contact_us.php';
       </script>";
    }
         else
     {
      $query="INSERT INTO feedback (uname,phno,email,city,message) VALUES('$name','$phno','$email','$city','$message')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
       echo"<script>alert(' Your feedback Successfully submitted');
        window.location.href='contact_us.php'
        </script>";
         }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>welcome to leaves of green</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            body 
                {
                background-image:url(img/d.jpg);
                 background-repeat: no-repeat;
                    background-size:cover;
                font-family: Arial, Helvetica, sans-serif;
                }
            
            p
                {
                font-size: 18px;
                }

            input
                   {
                       width:50%;
                       padding:5px;
                       margin:5px 0 2px 0px;
                   }
            
            label   
            {
                display: inline-block;
                width:100px;
                text-align:right;
                 font-weight: bolder;
                
            }
            
            .div1 
            {
                position:fixed;
                top:120px;
                left:100px;
                bottom:80px;
                border: solid 1pt black;
                position: absolute; 
                background: rgb(0, 0, 0); 
                background: rgba(0, 0, 0, 0.5); 
                color: #f1f1f1; 
                padding: 10px 60px 10px 20px;
            }
            
            .div2  
            {
                position:fixed;
                top:120px;
                left:600px;
                bottom:80px;
                border: solid 1pt black;
                position: absolute; 
                background: rgb(0, 0, 0); 
                background: rgba(0, 0, 0, 0.5); 
                color: #f1f1f1; 
                padding: 20px 100px 60px 50px;    
            }
            
            .d  
            {
                font-size: 33px;
                font-family:sans-serif;
            }
            
            .dd
            {
                font-size: 16px;
                font-family: sans-serif;
                
            }
            
            .log
            {
                margin-left: 670px;
            }
            
            .log a 
            {
                float: left;
                padding: 15px 15px;
                text-decoration: none;
                font-size: 17px;
                color: white;
                font-weight: lighter;
            }
            
            .log a:hover
            {
                background-color:wheat;
                color: blue;
            }
            
        </style>
        
    </head>
    <body>
        
    <br>
        <div class="log">
            <a href="faqs.php" style="color:black;text-decoration:none";  >FAQS &nbsp;</a>
            <a href="privacy_policy.php" style="color:black";>PRIVACY POLICY &nbsp;</a>
            <a href="terms.php" style="color:black;text-decoration:none";>TERMS AND CONDITIONS &nbsp;</a>
            <a href="log_out.php" style="color:black;text-decoration:none";  >LOGOUT&nbsp;</a>
            </div>
            <form class="div1" method="post">
                <h2><u>Contact Us</u></h2>
                <label>Name:</label> <input type="text" name="n" placeholder="NAME"/><br><br>
                <label>Mobile No:</label><input type="tel" name="mn" placeholder="MOBILE NUMBER" maxlength="11"/><br><br>
                <label>City:</label><input type="text" name="c" placeholder="CITY"/><br><br>
                <label>E-Mail:</label><input type="text" name="em" placeholder="E-MAIL"/><br><br>
                <label>Message:</label><textarea rows="3" name="mes" cols="25" placeholder="Write your Query"></textarea><br><br> 
                <button type="submit" name="submit" class="contact_btn" >SUBMIT</button>
            </form>
          
       
            <div class="div2">
            <h2 class="d"><u>Mail Us</u></h2>
            <p class="dd">E-mail : care@leavesofgreen.com<br><br>
                <h3 class="d"><u>Our Location</u></h3>
                <p class="dd">1st floor<br>
                Jessica complex,<br>
                MG Road, Mangalore<br>
                Karnataka, India, 574509.<br>
                
            </p>
                    
        </div>
    </body>
</html>
