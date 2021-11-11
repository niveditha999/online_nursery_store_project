<?php
 session_start();
if(isset($_POST['login']))
{
 $uname=trim($_POST['uname']);
 $pass=trim($_POST['pw']);
 $conn = mysqli_connect("localhost", "root", "","php");
 if($uname==""||$pass=="")
 {
    echo"<script>
         alert('please fill the field');
          window.location.href='login.php';
         </script>";
 }
 else
 {
 $query = mysqli_query($conn, "SELECT uname,password FROM customer WHERE password='$pass' AND uname='$uname'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1)
 {
    
    $_SESSION['varname']=$uname;
    
    echo"<script>alert('loging in');
        window.location.href='purchase1.php';
        </script>";
 }
 else
 {
    echo"<script>
 alert('Username or password is invalid');
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
                   
                    body
                   {
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
                  
            .form1
                   {
                padding:0px 0px 10px 0px;
                 margin:130px 300px 0px 300px;
                border:solid 2pt gray;
                background:rgba(0,0,0,0.5);
                color: #fff; 
            }
                   
            .div1{
                padding:2px 20px 2px 20px;
            }
             label{
                display: inline-block;
                width:100px;
                text-align:right;
                font-weight: bolder;
                
            }
                   .p{
                       color: white;
                   }
               </style>
               </head>
    <body >
        
        <div class="form1">
        <form  method="POST">
                <div class="div1">
                    <h2>LOGIN</h2>
                    <p>Please fill below information to sign in</p>
                </div>
                <br><br>
                <center>
               
                    <label>Username:</label><input type="text" placeholder="USERNAME" name="uname" required/><br><br>
                    <label>Password:</label><input type="password" placeholder="PASSWORD" name="pw" required/><br><br>
                    <button type="submit" name="login" class="loginbtn">LOGIN</button>
            </center>
                 
            </form>
        </div>
        <div style="text-align:center;margin-bottom: 167px">
            
                <p class="pp">Don't have an account?<a href="register.php " style="color:blue;text-decoration:none";>Create account</a></p>
                 </div>
        
         
    </body>
</html>




