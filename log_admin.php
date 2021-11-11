<?php
session_start();
if(isset($_POST['login']))
{
 $email=trim($_POST['email']);
 $pass=trim($_POST['pw']);
 $conn = mysqli_connect("localhost", "root", "","php");
 if($email==""||$pass=="")
 {
    echo"<script>
         alert('Please fill the details');
          window.location.href='log_admin.php';
         </script>";
 }
 else
 {
 $query = mysqli_query($conn, "SELECT email,password FROM admin WHERE password='$pass' AND email='$email'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1)
 {  
    echo"<script>
        window.location.href='admin_page1.php';
        </script>";
 }
 else
 {
    echo"<script>
 alert('Email or Password is invalid');
 </script>";
 }
 mysqli_close($conn); 
 }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Leaves of Green</title>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               
               <style>
                   
                    body {
            background-image:url(img/q.jpg);
            background-position: center;
     background-repeat: no-repeat;
     background-size:cover;
     height: 100%;
}
                   input
                   {
                       width:50%;
                       padding:10px;  
                       background: #f1f1f1;
                   }
                  
             .form1{
                padding:0px 0px 10px 0px;
                margin: 130px 300px 200px 300px;
                border:solid 2pt gray;
                background:rgba(0,0,0,0.5);
                color: #fff; 
            }
            .div1{
                border-bottom:solid 2pt gray;
                padding:2px 20px 2px 20px;
            }
             label{
                display: inline-block;
                width:100px;
                text-align:right;
                 font-weight: bolder;
                
            }
               </style>
               
          
    </head>
    <body>        
        <div class="form1">
        <form method="POST">
                <div class="div1">
                    <h2>ADMIN LOGIN</h2>
                    <p>Please fill below information to sign in</p>
                </div>
                <br><br>
                
                <center>
                    <label>Email:</label><input type="text" placeholder="E-MAIL" name="email" required/><br><br>
                    <label>Password:</label><input type="password" placeholder="PASSWORD" name="pw" required/><br><br>
                    <button type="submit" name="login" class="loginbtn">LOGIN</button>

                    
                </center>
                 
            </form>
        </div>
          
    </body>
</html>






