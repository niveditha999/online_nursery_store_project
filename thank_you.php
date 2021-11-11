<?php
    
?>

<html>
    <head>
        <title>Thank You for Using Leaves of Green</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <style> 
           body {
            background-image:url(plants/b.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
            height: 100%;
                }
           
            .content
            {    
                padding:150px 0px 195px 50px;      
            }
            
            p{
                font-size: 20px;
                font-weight: bold;
            }
           .log{
                margin-left: 1130px;
               margin-top: 30px;
            }
            .log a {
                float: left;
                
                padding: 9px 30px;
                text-decoration: none;
                font-size: 20px;
                color: white;
                font-weight: lighter;
            }
                 .log a:hover {
                background-color:wheat;
                color: blue;
            }
        
        </style>
    </head>
    
    <body>
       
        
            <div class="log">
            
            
                <a href="log_out.php" style="color:black;text-decoration:none";  >LOGOUT&nbsp;</a>
            </div>
            <div class="content">
             <h1>THANK YOU FOR USING LEAVES OF GREEN</h1>
            <p>Your order has been placed.</p>
            <p>Total Cost:<?php
                session_start();
            $tc=$_SESSION['varname4'];
            echo $tc?></p>
            <p>Item(s) will be delivered to you from  Leaves of Green</p>
            
        </div>
        
    </body>
</html>
