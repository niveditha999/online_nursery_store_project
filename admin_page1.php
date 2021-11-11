<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Leaves of Green</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <style>
        body {
            background-image:url(img/g.jpg);
        
     background-repeat: no-repeat;
     background-size:cover;
     
}
      .div1{
           position:absolute;
           top:190px;
           left:100px;
        font-size: 35px;
           padding: 10px 30px 10px 30px;
}
       
        .log{
                margin-left: 650px;
            }
            .log a {
                float: left;
                
                padding: 9px 30px;
                text-decoration: none;
                font-size: 17px;
                color: white;
                font-weight: lighter;
            }
                 .log a:hover {
                background-color:wheat;
                color: blue;
            }
    </style>
    <body>
        <br>
          <div class="content">
        <div class="log">
            <a href="pnt.php" style="color:black;text-decoration:none";>INSERT PLANT &nbsp;</a>
                
               <a href="feedback.php" style="color:black;text-decoration:none";>VIEW FEEDBACK &nbsp;</a>
                 
                  <a href="log_out.php" style="color:black;text-decoration:none";>LOGOUT&nbsp;</a>
                
        <div class="div1">
            
            <p><center>You've logged in as Admin.</center></p>
             
            </div>
            
        </div>
        </div>
    </body>
</html>