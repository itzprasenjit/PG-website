
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
        background-color: white;
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
      
        
        
        .list .boys:hover
        {
            background-color: whitesmoke ;
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
      
       .text 
       {
        width: 50%;
        height: 800px;
        background-color: whitesmoke;
        color: black;
        font-size: 20px;
        margin-left: 50px;
        font-family: 'Times New Roman', Times, serif;
        margin-top: 30px;

       }
       .text .inside
       {
        margin: 25px;
       }
       .text .contact
       {
        margin: 25px;
       }
       .logo img
       {
        position: absolute;
        top: 150px;
        left: 830px;
        width: 600px;
        height: 600px;
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
            <a href="/pg_website/logout.php" class="nav2">LOGOUT</a>
        </div>
    </div>
    <div class="text">
        <div class="inside">
            <h1>ABOUT</h1>
            <hr>
            <p>Our website has a home page which have namely four pages linked with it namely BOYS PG, GIRLS PG,ABOUT,CONTACT US and LOGOUT .The Boys PG has two pages  Register for boys page were if you are a  PG owner than you can register your PG into the list which asks for various details regarding the PG after registering your PG if you visit the PG list than your newly registered PG will be displayed in the list. Similarly in the Girls PG page linked in  the home page if clicked than shows to pages namely ‘Register for Girls’ and ‘PG list’ where if we go to Register for Girls than if you are a Girls PG owner than you may register your PG in it filling the details of your PG and the PG list will finally display your PG along with the other PG registered earlier. Also the ‘About’ page has ‘Contact Us’ page linked with it which has contact details and ‘About’ page has information about the website and the ‘Logout’ page enables us to exit the website.</p>
            <br>
        </div> 
        <div class="contact">
            <h1>CONTACT</h1>
            <p>Aniket Ghosh-8756364581</p>
            <p>Biraj Paul-9957242218</p>
            <p>Debotri Ghosh-9646328906</p>
            <p>Parag Chowdhury-8787525233</p>
            <p>Prasenjit Paul-939531135</p>
        </div>
    </div>
   <div class="logo">
        <img src="/pg_website/images/nivaslogo.PNG">
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