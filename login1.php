<?php

include('C:/wamp64/www/Php/connect_db.php');
       if(isset($_POST['option']))
       {
          $val1=$_POST['opt'];
          if($val1=="ADMIN")
          {
              header("location:log_admin.php");
          }
          else
          {
              header("location:log_cust.php");
          }  
       }

?>
<html>
    <head>
               <title>Welcome to Leaves Of Green</title>
               <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link href="css1.css" rel="stylesheet"/>
    </head>
    <style>
        form{
            border-bottom:solid green 2pt;
            border-left:solid green 2pt;
            border-right: solid green 2pt;
            border-collapse: collapse;
            padding:50px 70px 50px 50px;
            margin:0px 400px 187px 400px;
            margin-bottom: 200px; 
  
        }
        #s2{
           
            margin:70px 400px 0px 400px;
            padding:10px 10px 10px 10px;
            border:2pt green solid;
            padding: 1px 1px 1px 1px;
            text-align: center;
            
           
        }
       select
                   {
                       width:100%;
                       padding:15px; 
                    
                       font-size: 20px;
                       border: 1pt;
                       
                   }
                   option{
                       border:1pt;
                   }
                   .s1{
                       display: block;
                   }
                               
                               
           #i1 {
                position:absolute;
                top:120px;
                left:1050px;
                width: 350px;
                height: 380px;
            }
            #i2{
                 position:absolute;
                top:120px;
                left:20px;
                width: 350px;
                height: 380px;
            }
        body {
            background-image:url(img/y.jpg);
            background-position: center;
     background-repeat: no-repeat;
    
}
        }
        
    </style>
    <body>
        
        <div id="s2"><h2>SELECT REQUIRED FIELD</h2></div>
                <form method="post">  
                    <div class="s1">
                    <p><select id="opt" name="opt">
                        <option>ADMIN</option>
                        <option>CUSTOMER</option>
                        </select><br><br></p>
                    </div>
                    <center><button type="submit" name="option">SUBMIT</button></center>
                </form>
        
    </body>
</html>
