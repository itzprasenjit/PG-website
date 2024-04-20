<?php
if(isset($_POST['owner_name']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database="pgdetail";

    $conn=mysqli_connect($server,$username,$password,$database);

    if(!$conn)
    {
        die("connection failed");
    }
   

    $owner_name=$_POST['owner_name'];
    $pg_name=$_POST['pg_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $desc=$_POST['desc'];
    

    $sql="INSERT INTO `pgrecord` (`sl_no`, `name`, `address`, `number`) VALUES (NULL, '$pg_name', '$address', '$number');";

    if($conn->query($sql)==true)
    {
        echo "Your pg has been registered succesfully";
    }
    else{
        echo "error: $sql <br> $conn->error";
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
        
        body
        {
            background-image: url(/pg_website/images/mini2formback.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container
        {

            margin-top: 30px;
            margin-left: 300px;
            width: 60%;
            height: 1000px;
            background-color: rgba(0, 0, 0, 0.3);
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.8);
        }
        .container .box
        {
            padding-top: 20px;
            position: relative;
            top: 25px;
            width: 90%;
            margin-left: 50px;
            height: 900px;
        }
        .container .box h1
        {
            text-align: center;
        }
        .container .box .kind
        {
            text-align: center;
        }
        .container .box p
        {
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea
        {
            width: 60%;
            height: 30px;
            border-radius: 20px;
            padding-left: 10px;
        }
        input[type="submit"]
        {
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            position: relative;
            background-color: rgb(25, 124, 216);
            width: 200px;
            height: 80px;
            top: 100px;
            right: 150px;
            border-radius: 30px;
            border: 0.5px solid black;
            color: white;
            

        }
        input[type="submit"]:hover
        {
            cursor: pointer;
            background-color: rgb(40, 120, 165);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Registration form</h1>
            <p class="kind">kindly enter your detail for registaring your pg</p>
            <form action="registrationformboys.php" method="post">
                <p>Owner name</p>
                <input type="text" name="owner_name" placeholder="enter pg owner name" required>
                <p>Pg name</p>
                <input type="text" name="pg_name" placeholder="enter pg name" required>
                <p>Contact no</p>
                <input type="number" name="number" placeholder="enter number" required>
                <p>address</p>
                <input type="text" name="address" placeholder="enter address of pg" required>
                <p>email</p>
                <input type="email" name="email" placeholder="enter email of pg owner" required>
                <p>Add description about your pg</p>
                <textarea rows="8" cols="30" name="desc" required></textarea>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>