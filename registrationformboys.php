<?php
if(isset($_POST['owner_name']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database="pgreg";

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


    $image1=$_FILES['image1']['name'];
    $image2=$_FILES['image2']['name'];
    $image3=$_FILES['image3']['name'];

    $temp_image1=$_FILES['image1']['tmp_name'];
    $temp_image2=$_FILES['image2']['tmp_name'];
    $temp_image3=$_FILES['image3']['tmp_name'];


    move_uploaded_file($temp_image1,"images/$image1");
    move_uploaded_file($temp_image2,"images/$image2");
    move_uploaded_file($temp_image3,"images/$image3");

    

    // $sql="INSERT INTO `boysreg` (`sl_no`, `owner_name`, `pg_name`, `address`, `number`, `email`, `description`, `image1`, `image2`, `imag23`) VALUES (NULL, $owner_name, $pg_name, $address, $number, $email, $desc, $image1, $image2, $image3);";

    // if($conn->query($sql)==true)
    // {
    //     echo "Your pg has been registered succesfully";
    // }
    // else{
    //     echo "error: $sql <br> $conn->error";
    // }

    // $conn->close();

    // Assuming you have established a database connection in $conn

    // Define your SQL query with placeholders
    $sql = "INSERT INTO boysreg (owner_name, pg_name, address, number, email, description, image1, image2, imag23) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the placeholders
    $stmt->bind_param("sssssssss", $owner_name, $pg_name, $address, $number, $email, $desc, $image1, $image2, $image3);

    // Set the parameter values
    $owner_name=$_POST['owner_name'];
    $pg_name=$_POST['pg_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $desc=$_POST['desc'];


    $image1=$_FILES['image1']['name'];
    $image2=$_FILES['image2']['name'];
    $image3=$_FILES['image3']['name'];

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Your PG has been registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
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
        
        #im{
            color: red;
            
            
        }


        .photo{
           
            padding-bottom: 10px;
            padding-left: 102px;
            padding-right: 100px;
            
         
        }


        #pic{
            color:white;
            
        }
        #in{
    
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 600;
            color: white;
            margin-top: 20px;
            margin-bottom: 20px;
        }


        
        body
        {
            background-image: url(/pg_website/images/mini2formback.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            margin-top: 125px;
            margin-left: 30%;
            width: 42%;
            height:1000px;
            background-color: rgba(20, 7, 108, 1);
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.8);
            border-radius: 5px;
        }
        .container .box
        {
            
            position: relative;
            
            width: 100%;
           
            height: 900px;
        }
        .container .box h1
        {
            text-align: center;
            background-color: rgb(1, 1, 75);
            padding: 15px;
            color: white;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 8px 0px, rgba(0, 0, 0, 0.12) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px;
        }
        
        #ki{
            text-align: center;
            color: red;
            padding-left: 10px;
        
        }
        .container .box p
        {
            font-size: 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 600;
            padding-left: 102px;
            color: white;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea
        {
            width: 64%;
            height: 30px;
            border-radius: 5px;
            padding-left: 10px;
            margin-left: 102PX;
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
            margin-left: 102px;
                    

        }
        input[type="submit"]:hover
        {
            cursor: pointer;
            background-color: rgb(89, 198, 91);
        }
    
    </style>
</head>
<body>
<div class="container">
        <div class="box">
            <h1>Registration form</h1>
            <p class="kind" id="ki">kindly enter your detail for registaring your pg</p>
            <form action="" method="post" enctype="multipart/form-data">
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

                
                <div class="photo">
                <h2 id="in">INSERT IMAGE OF YOUR PG</h2>
                <p id="pic">insert image1</p>
                <input id="im" type="file" name="image1" placeholder="insert a image" required>
                
                <p id="pic">insert image2</p>
                <input id="im" type="file" name="image2" placeholder="insert a image" required>
                
                <p id="pic">insert image3</p>
                <input id="pic" type="file" name="image3" placeholder="insert a image" required>

                <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>