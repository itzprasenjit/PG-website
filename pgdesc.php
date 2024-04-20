<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini college project 2</title>
    <style>
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
            width: 30px;
            height: 30px;
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
        }
        .container .right .nav2
        {
            position: absolute;
            left: 1350px;
            top: 35px;
        }
        .container .left .blue
        {
            color: rgb(21, 119, 176);
        }
        .container .left .orange
        {
            color: orange;
        }
        .image img
        {
            width: 100%;
            height: 500px;
        }
        .intro
        {
            position: relative;
            margin-top: 20px;
            width: 90%;
            top: 20px;
            left: 50px;
            height: 350px;
            box-shadow: 2px 2px 2px 2px rgb(194, 192, 192);
        }
        .intro .up
        {
            position: relative;
            font-size: 50px;
            font-family: 'Times New Roman', Times, serif;
            left: 420px;
            bottom: 250px;
        }
        .intro .down
        {
            position: relative;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            left: 430px;
            bottom: 295px;
        }
        .intro .owner
        {
            position: relative;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            left: 430px;
            bottom: 260px;
        }
        .intro a .book
        {
            position: relative;
            width: 150px;
            height: 40px;
            background-color: rgb(45, 45, 165);
            left: 1100px;
            bottom: 315px;
        }
        .intro a
        {
            color: white;
            text-decoration: none;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }
        .intro img
        {
            position: relative;
            left: 200px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-top: 80px;
        }
        .about
        {
            width: 100%;
            height: 400px;
            background-color: whitesmoke;
            margin-top: 50px;
        }
        .about .para
        {
            position: relative;
            width: 80%;
            height: 300px;
            left: 140px;
            top: 50px;
            
        }
        .about .para p
        {
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            margin: 10px;
        }
        .galery
        {
            position: relative;
            margin-top: 100px;
            left: 100px;
            width: 90%;
        }
        .galery .images img
        {
            width: 300px;
            height: 300px;
            padding-left: 100px;
            padding-top: 20px;
        }
        .galery .images h1
        {
            margin-top: 100px;
            
            position: relative;
            left: 100px;
        }
        .footer
        {
            margin-top: 60px;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="mini2house2.jpg">
            <p class="blue">FIND </p><p class="orange"> PG</p>
        </div>
        <div class="right">
            <a href="#" class="nav1">ABOUT</a>
            <a href="#" class="nav2">LOGIN</a>
        </div>
    </div>
    <div class="image">
        <img src="mini2desc.jpg">
    </div>
    <div class="intro">
        <img src="mini2boys.jpg">
        <p class="up">Aryan's Boys pg</p>
        <p class="down">kamrangi,marjatkandi,karimganj,pin-788701</p>
        <p class="owner">Owner-Sharuk Khan</p>
        <a href="#">
            <div class="book">
                <p>Book now</p>
            </div>
        </a>
    </div>
    <div class="about">
        <div class="para">
        <h1>
            ABOUT
        </h1>
        <p>Das pg is located 1.3 km away from college campus.total capacity of student intake in this pg is 14.here you can chose triple,dpuble,single bed room according to your choice.for mess food and other query kindly contact the pg owner</p>
        <br><br><br>
        <p>Name of pg Owner-Sharuk Khan</p>
        <p>contact no-1234567898</p>
        </div>
    </div>  
    <div class="galery">
            <div class="images">
                <h1>
                    SOME IMAGES OF DAS PG
                </h1>
                <img src="wallpaper.jpg">
                <img src="wallpaper2.jpg">
                <img src="wallpaper3.jpg">
                <img src="wallpaper.jpg">
                <img src="wallpaper2.jpg">
                <img src="wallpaper3.jpg">
            </div>
    </div>
    <div class="footer">
        <a href="#">
            <img src="facebook.png">
        </a>
        <a href="#">
            <img src="instagram.png">
        </a>
        <a href="#">
            <img src="linkden.png">
        </a>
    </div>
</body>
</html>