<?php
session_start();
        include 'connect_db.php';
         if(isset($_POST['purchasing']))
         {
                 $product=trim($_POST['product']);
                 $product=strtolower($product);
                 $_SESSION['varname2']=$product;
                 $user_check_query = "SELECT price FROM plants WHERE mname='$product' LIMIT 1";
                 $result1 = mysqli_query($link, $user_check_query);
                 $row1= mysqli_fetch_assoc($result1);
                 $price=$row1['price'];
                 $_SESSION['varname3']=$price;
                 $query="select page_path from pages where plant_name='$product' LIMIT 1";
                 $result = mysqli_query($link, $query);
                 $row = mysqli_fetch_assoc($result);
                 $path=$row['page_path'];
                 if($row) 
                 {
                      
                     
                    header("Location:".$path);
                     
                 }
                 else
                 {
                       echo"<script>alert('OOPS......!...THIS PRODUCT IS CURRENTLY NOT AVAILABLE');
                        window.location.href='purchase1.php'
                        </script>";
                 }
         }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Leaves of Green</title>
        
        <style>
            .search{
                margin-top:0px;
                margin-left: 125px;
                display:flex;
                align-items: center;
                position: relative;
                width: 50%;
            }
            .s{
                width:100%;
                border:2px solid black;
                 padding:5px;
                height:30px;
                border-radius:5px 0 0 5px;
                color:black;
                
            }
            .s:focus{
                color:#00b4cc;
            }
            .s_button{
                width:40px;
                border:3px solid black;
                background-color:lightblue;
                text-align:center;
                color:#fff;
                border-radius:0 5px 5px 0;
                font-size:20px;
            }
            .con{
                padding: 10px 30px 10px 30px;
                background-color: #80cbc4;
                color: black;
                margin: 70px 100px 37px 100px;
               
                
                
            }
            body {
            background-image:url(img/u.jpg);
        
     background-repeat: no-repeat;
     background-size:cover;
     height: 100%;
}
            
               tables
            {
            border-top: solid blue 5pt;
            border-bottom:solid blue 5pt;
            border-left:solid blue 5pt;
            border-right: solid blue 5pt;
            border-collapse: collapse;
            padding:50px 70px 50px 50px;
            margin:100px 850px 30px 80px;
                font-size: 30px;
                background:rgba(0,0,0,0.5);
                color: #fff;
            }
            .tables a:hover {
                background-color:wheat;
                color: blue;
            }
            .tables a {
            
                
                padding: 14px 16px;
                
                
                font-weight: lighter;
            }
            .log{
                margin-left: 50px;
            }
            .log a {
                float: left;
                
                padding: 15px 30px;
                text-decoration: none;
                font-size: 22px;
                color: white;
                font-weight: lighter;
            }
                 .log a:hover {
                background-color:wheat;
                color: blue;
            }
             .fa {
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: inherit;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                transform: translate(0, 0);
                }
            .fa-search:before{
                content:"\f002"
                }
            
.container{
    width: 90%;
    margin: auto;
 background: skyblue;
    margin-top: 20px;
}

.container ul{
    padding: 0px;
    margin: 0px;
}


.container ul li{
    float:left;
    list-style: none;
    width:20%;
    height:300px;
    background: ;
    margin :20px 0px 20px 55px; 
    border:2px solid blue;
    box-sizing: border-box;
}

.container ul li .bottom{
    width: 100%;
    height:50px;
    line-height: 50px;
    background:lightgreen;    
    text-align: center;
    color:white;
    font-size: 20px;
   
}

@media screen and (max-width:1250px){
    .container ul li{
        width:40%;
        margin-left: 40px;
         
    }
    
</style>
    </head>
    <body>
        <br>
       
        <form method="post">
        
            <div class="search">
                
                <input type="text" class="s" name="product" placeholder="Search for Plants here...">
                
                 <button name="purchasing" type="submit" class="ser_button"><i class="fa fa-search"></i></button> 
                   

            </div>
       </form>
          
   <div><a href="cart.php" style="color:black;text-decoration:none;margin-left:1100px;font-size:21px;border:4px solid lightgreen;background:silver;">CART</a></div>
    <div class="container">
        <ul>
        <li><div class="bottom">Aloevera</div><a href="plants/aloevera.php"><img src="plants/aloevera.jpg" width="236" height="246"></a></li>
        <li><div class="bottom">Tulasi</div><a href="plants/tulasi.php"><img src="plants/tulasi.jpg" width="236" height="246"></a></li>
        <li> <div class="bottom">Marigold</div> <a href="plants/marigold.php"><img src="plants/marigold.jpg" width="235" height="246"></a></li>
        <li> <div class="bottom">Rhoeo</div><a href="plants/rhoeo.php"><img src="plants/rhoeo.jpg" width="236" height="246"></a> </li>
        <li> <div class="bottom">Vinca</div> <a href="plants/vinca.php"><img src="plants/vinca.jpg" width="236" height="246"></a></li>
        <li> <div class="bottom">Rose</div><a href="plants/mrose.php"><img src="plants/mrose.jpg" width="236" height="246"></a> </li>
        <li> <div class="bottom">Neem</div><a href="plants/neem.php"><img src="plants/neem.jpg" width="235" height="246"></a> </li>
        <li> <div class="bottom">Jasmine</div><a href="plants/jas.php"><img src="plants/jas.jpg" width="235" height="246"></a> </li>
        <li> <div class="bottom">Mini Bamboo</div><a href="plants/bamboo.php"><img src="plants/bamboo.jpg" width="235" height="246"></a> </li>
        <li> <div class="bottom">Hibiscus</div><a href="plants/hibiscus.php"><img src="plants/hibiscus.jpg" width="235" height="246"></a> </li>
    <li> <div class="bottom">Lemon Grass</div><a href="plants/lemongrass.php"><img src="plants/lemongrass.jpg" width="235" height="246"></a></li>
        <li> <div class="bottom">Mehendi</div><a href="plants/mehendi.php"><img src="plants/mehendi.jpg" width="235" height="246"></a> </li>
       <li> <div class="bottom">Money Plant</div><a href="plants/money.php"><img src="plants/money.jpg" width="235" height="246"></a> </li>
        <li> <div class="bottom">Sevanti</div><a href="plants/sevanti.php"><img src="plants/sevanti.jpg" width="235" height="246"></a> </li>
        <li> <div class="bottom">Rosemery</div><a href="plants/rosemery.php"><img src="plants/rosemery.jpg" width="235" height="246"></a> </li>
        <li> <div class="bottom">Spider Plant</div><a href="plants/spider.php"><img src="plants/spider.jpg" width="235" height="246"></a> </li>
            
        </ul>
    </div>
       
            
    </body>
</html>

