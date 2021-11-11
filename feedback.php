<?php
        include('connect_db.php');
        session_start();
        $result=mysqli_query($link,"SELECT * from feedback")
        
      
?>

<html>
    <head>
        <link href="css1.css" rel="stylesheet"/>
    </head>
    <style>
        td,tr,table{
            border: solid 2px green;
            border-collapse: collapse;
            padding: 10px 10px 10px 10px;
           text-align: center;
           background-color: lightgray;
           font-size: 19px;
                
        }
        table{
            width: 90%;
            margin: 30px 5px 425px 50px;
            
        }
        th{
            border: solid 3px green;
            border-collapse: collapse;
            padding: 15px 15px 15px 15px;
           text-align: center;
           font-size: 20px;
           background-color:gray;
                
        }
        
        .div2{
                 border-bottom: solid 2pt green;
                 text-align: center;
                padding:2px 20px 2px 20px;
            }
        body{
            
            background-image:url(img/z.jpg);
            background-position: center;
     background-repeat: no-repeat;
     background-size:cover;
     height: 100%;
}
           
        .log{
            margin-top: 20px;
                margin-left: 950px;
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
        
            <div class="log">
          <a href="log_out.php" style="color:black";>LOGOUT&nbsp;</a>
         </div>
        <br>
        <br>
        
        <div style="padding-top:23px ">
            <table>
                <tr>
                    <th>CUSTOMER NAME</th>
                    <th>CONTACT NUMBER</th>
                    <th>E-MAIL</th>
                    <th>CITY</th>
                    <th>FEEDBACK MESSAGE</th>
                </tr>
            
	<?php
	while($row = mysqli_fetch_array($result)) 
	{
	$name=$row['uname'];
	$phno=$row['phno'];
	$mail=$row['email'];
        $city=$row['city'];
        $message=$row['message'];
        
	?>
	
            <tr>
                <td><?php echo $name?></td>
                <td><?php echo $phno?></td>
                <td><?php echo $mail?></td>
                <td><?php echo $city?></td>
                <td><?php echo $message?></td>
        </tr>
	
            <?php
        }
            ?>
</table>
        </div>
        </body>
        </html>
