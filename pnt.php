<?php
 include('connect_db.php');
               session_start();

       if(isset($_POST['insert']))
  {
    $mname=trim($_POST['mn']);
    $mpath=trim($_POST['mi']);
    $price=trim($_POST['mc']);
   $user_check_query = "SELECT * FROM plants WHERE mname='$mname' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) 
  { 
    if ($user['mname']== $mname) {
      echo "<script>alert('Information is uptodate...');
       window.location.href='admin_page1.php';
       </script>";
    }
  }

     else
     {
      $query="INSERT INTO plants (mname,mimage,price) VALUES('$mname','$mpath','$price')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
        
        
        echo"<script>alert('Successfully inserted');
        window.location.href='admin_page1.php'
        </script>";

  }
  }
?>
<html>
    <head>
        <title>Welcome to Leaves of Green</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css1.css" rel="stylesheet"/>
    </head>
    <style>
        body {
            background-image:url(img/v.jpg);
            background-position: center;
     background-repeat: no-repeat;
     background-size:cover;
     height: 100%;
}
        input
                   {
                       width:30%;
                       padding:10px;
                    background: #f1f1f1;
                   }
                   label{
                display: inline-block;
                width:200px;
                text-align:right;
                 font-weight: bolder;
                
            }
            .form1{
                
                 padding:10px 0px 10px 0px;
                 border:solid 2pt green;
                background-color: white;
                 margin: 60px 80px 0px 670px;
                color: black;
                
            }
            .div2{
                 border-bottom: solid 2pt green;
                 text-align: center;
                padding:2px 20px 2px 20px;
            }
        .header1{margin-left: 200px;
        color: black;} 
    </style>
    <body>
        <div class="header1">
             
             <a href="feedback.php" style="color:black;">VIEW FEEDBACK &nbsp;</a>
            <a href="log_out.php" style="color:black;">LOGOUT&nbsp;</a>
                
        </div>
        
         <form class="form1" method="POST">
                     <div class="div2">
                        <h2>Information About Plants</h2>
                        
                     </div>
                     <center>
                         <br><br>
                         <label>Plant Name:</label> <input type="text" placeholder="NAME" name="mn" required=""/><br><br>
                         <label>Plant Image Path:</label>  <input type="text" placeholder="PATH" name="mi"   required=""/><br><br>
                         <label>Plant Cost:</label> <input type="number" placeholder="PRICE" name="mc" required=""/><br><br>
                  
                        <button type="submit" name="insert" class="register_btn">INSERT</button>
                     </center>
                     
                   </form>
    </body>
</html>
