<?php
       include('connect_db.php');
               session_start();

       if(isset($_POST['register']))
  {
    $name=trim($_POST['name']);
    $phno=trim($_POST['mob']);
    $email=trim($_POST['email']);
    $uname=trim($_POST['uname']);
    $address=trim($_POST['address']);    
    $password=trim($_POST['pw']); 
    if($name==""||$phno==""||$email==""||$uname==""||$address==""||$password=="")
    {
      echo "<script>alert('Please enter this field');
       window.location.href='register.php';
       </script>";
    }
    if(!(preg_match('/^[a-zA-Z\s]+$/',$name)))
    {
        echo "<script>alert('invalid name');
       window.location.href='register.php';
       </script>";
    }
      $user_check_query = "SELECT * FROM customer WHERE uname='$uname' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) 
  { 
    if ($user['uname']== $uname) {
      echo "<script>alert('Username exists...please enter another usename...');
       window.location.href='register.php';
       </script>";
    }
  }

     else
     {
      $query="INSERT INTO customer (uname,cname,phno,email,address,password) VALUES('$uname','$name','$phno','$email','$address','$password')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
        $_SESSION['varname']=$uname;
        
        echo"<script>alert('Successfully registered');
        window.location.href='purchase1.php'
        </script>";

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
                   input,textarea
                   {
                       width:50%;
                       padding:10px;
                       
                       background: #f1f1f1;
                   }
                  
            .form1{
               padding:0px 0px 10px 0px;
                margin:0px 250px 0px 250px;
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
               </style>
               
    </head>
    <body>
              <form class="form1" method="POST">
                     <div class="div1">
                        <h2><center>REGISTER</center></h2>
                        
                     </div>
                     <center>
                         <br><br>
                         <label>Name:</label> <input type="text" placeholder="NAME" name="name" required=""/><br><br>
                         <label>Mobile No:</label> <input type="tel" placeholder="MOBILE NUMBER" name="mob"   required="" maxlength="11"/><br><br>
                         <label>Email: </label> <input type="email" placeholder="E-MAIL" name="email" required=""/><br><br>
                        <label>Username: </label> <input type="text" placeholder="USERNAME" name="uname" required=""/><br><br>
                        <label>Password: </label> <input type="password" placeholder="PASSWORD" name="pw" minlength="5" required=""/><br><br>
                        <label>Address: </label> <textarea rows="1" cols="25" placeholder="ADDRESS" name="address" required=""></textarea><br><br>

                        <p>By creating an account you agree to our <a href="terms.php" style="color:blue;text-decoration:none";> 
                            Terms and Privacy</a></p>
                         <p>Already have an account?<a href="login.php" style=" color:blue;text-decoration:none";>Sign In</a></p> 
                        <button type="submit" name="register" class="register_btn">REGISTER</button>
                     </center>
                     </form>
                     <div style="text-align:center">
                             
                     </div>
                   
             
         
    </body>
</html>


