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

    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $number=mysqli_real_escape_string($conn,$_POST['number']);

    

    $emails = "SELECT * FROM `info` WHERE `email`='" . $_POST['email'] . "';";
    $exist = mysqli_query($conn, $emails);

    if (!$exist) {
        die('Error: ' . mysqli_error($conn)); 
    }

    $emailcount = mysqli_num_rows($exist);

    if ($emailcount > 0) {
        ?>
        <script>
            alert("Email is already registered");
        </script>
        <?php
    }

    else
    {
        if($password === $c_password)
        {
            $pass=password_hash($password, PASSWORD_BCRYPT);
            $cpass=password_hash($c_password, PASSWORD_BCRYPT);
            $sql="INSERT INTO `info` (`sl_no`, `name`, `email`, `phone`, `password`, `c_password`)
             VALUES 
            (NULL, '$name', '$email', '$number', '$pass', '$cpass');";
            $iquery=mysqli_query($conn,$sql);

            if($iquery)
            {
                ?>
                    <script>
                        alert("you have succesfully sign up your account");
                    </script>
                <?php
            }
            
            else{
       
                ?>
                    <script>
                        alert("no connection");
                    </script>

                <?php
            }
        }
        else
        {
            ?>
            <script>
                alert ("password not matching")
            </script>
           <?php
        }
    }

    $conn->close();
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
        height: auto;
        }
        .container .right .nav2:hover{
            color: black;
        }
        .container
        {
            margin-bottom:30px;
            width: 100%;
            height: 120px;
            background-color: white;
            
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
            left: 1350px;
            top: 35px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            font-size: 20px;
            font-weight: bold;
            color: aliceblue;
            padding: 10px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: rgb(67, 83, 235);
            border-radius: 5px;
        }
        .container .right .nav3
        {
            position: absolute;
            left: 1050px;
            top: 35px;
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
            margin: 15px 130px 88px 0px;
            background-color: whitesmoke;
            height:800px;
            margin-left: 35%;
            margin-top: 100px;
        }
        .signup h1
        {
        margin-left: 40px;
        margin-top: 60px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 30px;
        
        }
        .signup .form
        {
            margin-left: 20px;
        }
        .signup .form p
        {
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: rgb(112, 112, 112);
            font-weight: 600;
            margin-left: 23px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"]
        {
            width: 84%;
            border: 1px;
            border-color: rgb(160, 160, 160);
            height: 30px;
            margin-left: 24px;
        }
        input[type="submit"]
        {
            position: relative;
            top: 72px;
            margin-left: 25px;
            
            width: 180px;
            height: 40px;
            border: 2px solid;
            border-radius: 4px;
            background-color: rgb(26,182,79);
            color: white;

            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 15px;
        }
        input[type="submit"]:hover 
        {
        background-color: rgb(89, 198, 91);
        }
    
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="/pg_website/images/nivaslogo.png">
            <p class="blue">NIVAS </p><p class="orange"> NAVIGATOR</p>
        </div>
        <div class="right">
            <!-- <a href="#" class="nav1">Signup</a> -->
            <a href="/pg_website/login.php" class="nav2">Login</a>
            <!-- <a href="#" class="nav3">Logout</a> -->
        </div>
    </div>
    <div class="signup">
        <h1>Signup your account</h1>
        <div class="form">
            <form action="" method="post">
            <p>username</p>
            <input type="text" name="name" required>
            <p>email</p>
            <input type="email" name="email" required>
            <p>number</p>
            <input type="number" name="number" required>
            <p>password</p>
            <input type="password" name="password" required>
            <p>confirm password</p>
            <input type="password" name="c_password" required>
            <input type="submit" value="signup" name="submit" required>
            </form>
        </div>
    </div>
</body>
</html>