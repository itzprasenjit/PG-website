<?php
    session_start();
?>
<?php
if(isset($_POST['submit']))

{
    $server="localhost";
    $username="root";
    $password="";
    $database="new_login";

    $conn=mysqli_connect($server,$username,$password,$database);

    if(!$conn)
    {
        die("connection failed");
    }

    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $emails = "SELECT * FROM `info` WHERE `email`='" . $_POST['email'] . "';";
    $exist = mysqli_query($conn, $emails);

    if (!$exist) {
        die('Error: ' . mysqli_error($conn));
    }

    $emailcount = mysqli_num_rows($exist);

    if($emailcount)
    {
        $email_pass=mysqli_fetch_assoc($exist);

        $db_pass=$email_pass['password'];

        $_SESSION['name']=$email_pass['name'];

        $pass_decode=password_verify($password,$db_pass);

        if ($pass_decode) {
            echo '<script>';
            echo 'alert("Login successful");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }
        else
        {
            ?>
                <script>
                    alert("password not matching");
                </script>
            <?php
        }
    }
    else
    {
        ?>
            <script>
                alert("email not registered");
            </script>
        <?php

    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      


body {
  background: linear-gradient(to bottom, #6cdce0, #7fdc85);
  margin: 0;
  height: 100vh;
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
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
            
  

  
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
        left: 1300px;
        top: 25px;
        font-size: 20px;
        font-weight: bold;
        color: aliceblue;
        padding: 10px;
        padding-left: 15px;
        padding-right: 15px;
        background-color: rgb(67, 83, 235);
        border-radius: 5px;
}
.container .right .nav1:hover {
    color: rgb(0, 0, 0);
            
            
        }
        .container .right .nav2
        {
            position: absolute;
            left: 1350px;
            top: 35px;
        }
        .container .right .nav3
        {
            position: absolute;
            left: 1050px;
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
        .signup 
        {
            background-color: rgb(255, 255, 255);
            display: flex;
            flex-direction: column;
            z-index: 1;
            height: fit-content;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
            width: 480px !important;
            margin: 95px 130px 88px 0px ;
            background-color: whitesmoke;
            height: 400px;
            margin-left: 500px;
        }
        .signup h1
        {font-size: 32px;
        line-height: 1.5;
        font-weight: 700;
            text-align: center;
        }
        .signup .form
        {
            margin-left: 47px;
        }
        .signup .form p
        {margin: 28px 0 9px;
        font-weight: 600;
        font-size: 20px;
           
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"]
        {
            width: 87%;
            border: 1px solid gray;
            height: 30px;
            border-radius: 2px;
            padding-left: 10px;

        }
        input[type="submit"]
        {
            
            top: 60px;
    right: 10px;
    background: rgb(201, 201, 201);
    box-shadow: none;
    cursor: auto;
    width: 248px;
    padding: 9px 0px;
    border-radius: 4px;
    background: rgb(26, 182, 79);
    border: none;
    font-weight: 700;
    line-height: 1.9;
    letter-spacing: 0.4px;
    color: rgb(255, 255, 255);
    cursor: pointer;
    margin-top: 25px;
    font-size: 20px;
}
input[type="submit"]:hover{
    background-color: rgb(89, 198, 91);
}
        
        input[type="email"]
        {
            color:black;
        }
        
    
            
    </style>
</head>
<body>
 
        <div class="container">
            <div class="left">
                <img src="/pg_website/images/mini2house2.jpg">
                <p class="blue">NIVAS</p><p class="orange"> NAVIGATOR</p>
            </div>
            <div class="right">
                <a href="/pg_website/signup.php" class="nav1">Signup your account</a>
            </div>
        </div>
        
        <div class="signup">
            <h1>Login your account</h1>
            <div class="form">
                <form action="" method="post">
                <!-- <p>username</p>
                <input type="text" name="name" required> -->
                <p>email</p>
                <input type="email" name="email" required>
                <p>password</p>
                <input type="password" name="password" required>
                <input type="submit" value="login" name="submit" required>
                </form>
            </div>
        </div>


   
</body>
</html>