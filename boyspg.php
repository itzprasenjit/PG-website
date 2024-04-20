<?php
include('commomfunc.php')
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
        a
        {
            color:black;
        }
        .serch{
            margin-left: 400px;
        }
        .serch input[type="text"]
        {
            width: 50%;
            border: 1px solid black;
            height: 35px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
        }
        .serch input[type="submit"]
        {
            width: 80px;
            border: 1px solid black;
            height: 35px;
            border-radius: 20px;
            background-color: rgb(67, 83, 235);
            color: white;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
        }
        .serch input[type="submit"]:hover{
            color: black;
        }
        .container
        {
            margin-bottom:40px;
            width: 100%;
            height: 120px;
            background-color: white;
            /* margin-top:20px; */
            
        }
        .container .left
        {
            padding-left: 20px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
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
        }
        .container .right .nav2
        {
            position: absolute;
            left: 1296px;
            top: 18px;
            font-size: 20px;
            font-weight: bold;
            color: aliceblue;
            padding: 10px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: rgb(67, 83, 235);
            border-radius: 5px;
        }
        .container .right .nav2:hover{
            color: black;
        }
        
        .footer
        {
            margin-top: 215px;
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

       .boyspglist .aryan
        {
            position: relative;
            width: 70%;
            height: 320px;
            left: 200px;
            margin-top: 10px;
            border-radius: 20px;
            box-shadow: 1px 1px 1px 1px rgb(194, 192, 192);
            color:black;
            background-color:whitesmoke;

           
        }
        .boyspglist .aryan:hover
        {
            position: relative;
            width: 70%;
            height: 320px;
            box-shadow: 10px black;
            left: 200px;
            margin-top: 10px;
            border-radius: 20px;
            box-shadow: 6px 5px 5px 5px rgb(194, 192, 192);
            background-color:whitesmoke;

           
        }
        .boyspglist .aryan img
        {
            float: left;
            position: relative;
            width: 30%;
            height: 80%;
            left: 20px;
            top: 10px;
            border-radius: 20px;
        }
        .boyspglist .aryan .head
        {
            display: block;
            position: relative;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
            top: 50px;
            left: 80px;
           
        }
        .boyspglist .aryan 
        {
            position: relative;
            left: 200px;
            top: 15px;
        }
        .boyspglist .aryan  .address
        {
            position: relative;
            display: inline-block;
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            left: 85px;
            top: 10px;
        }
        .boyspglist .aryan  .owner
        {
            position: relative;
            display: inline-block;
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            right: 62px;
            top: 35px;
        }
        .boyspglist .aryan  .desc
        {
            position: relative;
            display: inline-block;
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            right: 207px;
            top: 60px;
        }
        .boyspglist .aryan .contact
        {
            position: relative;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            left: 85px;
            top: 60px;
        }
        .boyspglist .aryan .view
        {
            position: relative;
            width: 90px;
            height: 40px;
            /* background-color: rgb(54, 54, 149); */
            background-color: whitesmoke;
            left: 850px;
            
        }
        .boyspglist .aryan .view p{
            position: relative;
            bottom: 20px;
            color: white;
            font-size: 40px;
            text-align: center;
            justify-content: center;
        }
        .boyspglist .aryan a
        {
            text-decoration: none;
        } 
        .serch
        {
            padding:20px;

        }
    
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
             <img src="/pg_website/images/nivaslogo.png" alt="image">
            <p class="blue">NIVAS</p><p class="orange"> NAVIGATOR</p>
        </div>
        <div class="right">
            <!-- <a href="#" class="nav1">ABOUT</a> -->
            <a href="/pg_website/registrationformboys.php" class="nav2">REGISTER FOR BOY'S PG</a>
        </div>
    </div>

    <div class="serch">
    <form action="search.php" method="get">

        <input type="text" name="serach" placeholder="search pg" type="search">
        <input type="submit" value="search" name="search_pg">

    </form>
    </div>
  
    <?php
        boyspg();
    ?>
                         
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