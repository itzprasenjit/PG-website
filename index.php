<?php
session_start();

if(!isset($_SESSION['name']))
{
    echo '<script>';
    echo 'alert("you are logged out");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini college project 2</title>
    <style>
        
        body {
        background: linear-gradient(to bottom, #6cdce0, #7fdc85);
        margin: 0;
        height: auto;
        }

        .container
        {
            width: 100%;
            height: 90px;
            background-color: white;
            
        }
        .container .left
        {
            padding-left: 20px;
            

        }
        .container .left img{
            position: relative;
            top:5px;
            width: 80px;
            height: 80px;
        }
        .container .left .blue
        {
            position: relative;
            bottom:20px;
            color: rgb(21, 119, 176);
        }
        .container .left .orange
        {
            position: relative;
            bottom:20px;
            color: orange;
        }
        .container .left p{
            display: inline-block;
            font-size: 30px;
            padding-left: 4PX;
        }
        .container .right a{
            text-decoration: none;
            font-size: 30px;
            color: black;
        }
        .container .right .nav1
        {
            position: absolute;
            left: 1200px;
            top: 35px;
            font-size: 20px;
            font-weight: bold;
            padding-left: 40px;
           
            
        }
        .container .right .nav2
        {
            position: absolute;
            left: 1350px;
            top: 35px;
            font-size: 20px;
            font-weight: bold;
    
            
        }
         .container .right .nav1:hover{
            color: rgb(46, 8, 174);
         }
         .container .right .nav2:hover{
            color: rgb(46, 8, 174);
         }
       
        .image img{
            width: 100%;
            height: 500px;
            opacity: 0.9;
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3));
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
            
        }
        .image p{
            font-size: 50px;
            color: rgb(255, 255, 255);
        }
        .image .user
        {
            position: absolute;
            top: 100px;
            left: 550px;
        }
        .image .up
        {
            position: absolute;
            top: 200px;
            left: 600px;
        }
        .image .down
        {
            position: absolute;
            top: 300px;
            left: 600px;
        }
        .listed
        {
            font-size: 50px;
            color: black;
            text-align: center;
        }
        .list .boys
        {
            width: 300px;
            height: 400px;
            
        }
        .list .boys img
        {
            width: 90%;
            height: 250px;
            border-radius: 50%;
            margin-top: 10px;
        }
        .list .boys 
        {
            position: relative;
            top:40px;
            left: 400px;
            text-align: center;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
            color: black;
        }
        .list a
        {
            text-decoration: none;
        }
        .list .boys:hover
        {
            background-color: whitesmoke ;
        }
        .list .girls
        {
            width: 300px;
            height: 400px;
            
        }
        .list .girls img
        {
            width: 90%;
            height: 250px;
            border-radius: 50%;
            margin-top: 10px;
        }
        .list .girls 
        {
            
            position: relative;
            bottom:360px;
            left: 800px;
            text-align: center;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
            color: black;
        }
        .list .girls:hover
        {
            background-color: whitesmoke;
        }
        .footer
        {
            margin-top: 25px;
            width: 100%;
            height: 60px;
            background-color: rgb(33, 33, 33);
        }
        .footer img{
            position: relative;
            margin-top: 5px;
            left: 550px;
            margin-left: 60px;
        }
       .container .left{
        
        box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
        height: 85px;
       }
       .listed{
        color: #fff;
        font-size: 32px;
        font-weight: 800;
        line-height: 1.5;
        margin: 16px 0;
        text-align: center;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        background-color: rgb(244, 50, 50);
        padding: 50px;
        margin: 50px;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
       }
      
    
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="/pg_website/images/nivaslogo.png">
            <p class="blue">NIVAS</p><p class="orange"> NAVIGATOR</p>
        </div>
        <div class="right">
            <a href="about.php" class="nav1">ABOUT</a>
            <a href="/pg_website/logout.php" class="nav2">LOGOUT</a>
        </div>
    </div>
    <div class="image">
        <img src="/pg_website/images/mini2back2.jpg">
        <P class="user"><i>Hello</i> <i><?php echo $_SESSION['name']; ?></i><i>!!</P>
        <p class="up">LET'S FIND PG</p><p class="down">TOGETHER!!!</p>
    </div>
    <p class="listed">LISTED PG'S IN OUR WEBSITE</p>
    <div class="list">
        <a href="/pg_website/boyspg.php" target="_blank">
            <div class="boys">
                <img src="/pg_website/images/mini2boys.jpg">
                <p>For boys</p>
            </div>
        </a>
        <a href="/pg_website/girlspg.php" target="_blank">
            <div class="girls">
                <img src="/pg_website/images/mini2girls.jpg">
                <p>For girls</p>
            </div>
        </a>
    </div>
    <div class="footer">
        <a href="#">
            <img src="/pg_website/images/facebook.png">
        </a>
        <a href="#">
            <img src="/pg_website/images/instagram.png">
        </a>
        <a href="#">
            <img src="/pg_website/images/linkden.png">
        </a>
    </div>
</body>
</html>